<?php

require_once __DIR__ . '/../../../init.php';
require_once __DIR__ . '/../../../includes/gatewayfunctions.php';
require_once __DIR__ . '/../../../includes/invoicefunctions.php';

$gatewayModuleName = 'piprapay';
$gatewayParams = getGatewayVariables($gatewayModuleName);

// Make sure the module is active
if (!$gatewayParams['type']) {
    die("Module Not Activated");
}

// Read raw JSON data from the webhook
$raw = file_get_contents("php://input");
$data = json_decode($raw, true);

if ($gatewayParams['piprapay_version'] == "V2") {

    // Get API key from headers (case-insensitive)
    $headers = getallheaders();
    $receivedKey = $headers['mh-piprapay-api-key'] ?? $headers['Mh-Piprapay-Api-Key'] ?? $headers['MH-PIPRAPAY-API-KEY'] ?? '';

    if (empty($receivedKey) || $receivedKey !== $gatewayParams['apikey']) {
        header("HTTP/1.1 401 Unauthorized");
        die("Invalid API Key");
    }

    // Extract required fields
    $invoiceId = $data['metadata']['invoiceid'] ?? null;
    $ppId      = $data['pp_id'] ?? null;
    $status    = strtolower($data['status'] ?? '');

    if (!$invoiceId || !$ppId || !$status) {
        logTransaction($gatewayModuleName, $data, 'Missing parameters');
        die("Missing parameters");
    }

    $invoiceId      = (int)$invoiceId;
    $transactionId  = $ppId;
    $paymentAmount  = $data['amount'] ?? 0;
    $paymentFee     = 0.00;

    // Validate the invoice ID is a real invoice in WHMCS
    checkCbInvoiceID($invoiceId, $gatewayModuleName);

    // Check the transaction ID has not already been used
    checkCbTransID($transactionId);

    // Verify the payment with PipraPay
    $verifyPayload = json_encode(['pp_id' => $ppId]);

    $baseUrl = rtrim($gatewayParams['baseUrl'], '/');
    $ch = curl_init($baseUrl . '/api/verify-payments');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'mh-piprapay-api-key: ' . $gatewayParams['apikey'],
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $verifyPayload);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $verifyResponse = curl_exec($ch);
    $curlError = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($verifyResponse === false) {
        logTransaction($gatewayModuleName, ['curl_error' => $curlError, 'http_code' => $httpCode], 'cURL Error during verification');
        die("Verification request failed");
    }

    $verifyResult = json_decode($verifyResponse, true);

    // Confirm status from verification
    if (isset($verifyResult['status']) && strtolower($verifyResult['status']) === 'completed') {
        addInvoicePayment(
            $invoiceId,
            $transactionId,
            $paymentAmount,
            $paymentFee,
            $gatewayModuleName
        );
        logTransaction($gatewayModuleName, $data, 'Success');
        echo "Success";
    } else {
        logTransaction($gatewayModuleName, ['webhook_data' => $data, 'verify_result' => $verifyResult, 'http_code' => $httpCode], 'Verification Failed');
        echo "Payment verification failed.";
    }

} else {

    // V3+ API key validation from headers
    $headers = getallheaders();
    $receivedKey = $headers['MHS-PIPRAPAY-API-KEY'] ?? $headers['mhs-piprapay-api-key'] ?? $headers['Mhs-Piprapay-Api-Key'] ?? '';

    if (!empty($gatewayParams['apikey']) && (empty($receivedKey) || $receivedKey !== $gatewayParams['apikey'])) {
        header("HTTP/1.1 401 Unauthorized");
        die("Invalid API Key");
    }

    // Extract required fields
    $invoiceId = $data['metadata']['invoiceid'] ?? null;
    $ppId      = $data['pp_id'] ?? null;
    $status    = $data['status'] ?? null;

    if (!$invoiceId || !$ppId || !$status) {
        logTransaction($gatewayModuleName, $data, 'Missing parameters');
        die("Missing parameters");
    }

    $invoiceId      = (int)$invoiceId;
    $transactionId  = $ppId;
    $paymentAmount  = $data['amount'] ?? 0;
    $paymentFee     = 0.00;

    // Validate the invoice ID is a real invoice in WHMCS
    checkCbInvoiceID($invoiceId, $gatewayModuleName);

    // Check the transaction ID has not already been used
    checkCbTransID($transactionId);

    // Verify the payment with PipraPay
    $verifyPayload = json_encode(['pp_id' => $ppId]);

    $baseUrl = rtrim($gatewayParams['baseUrl'], '/');
    $ch = curl_init($baseUrl . '/verify-payment');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        'Content-Type: application/json',
        'Accept: application/json',
        'MHS-PIPRAPAY-API-KEY: ' . $gatewayParams['apikey'],
    ]);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $verifyPayload);
    curl_setopt($ch, CURLOPT_TIMEOUT, 30);
    $verifyResponse = curl_exec($ch);
    $curlError = curl_error($ch);
    $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    curl_close($ch);

    if ($verifyResponse === false) {
        logTransaction($gatewayModuleName, ['curl_error' => $curlError, 'http_code' => $httpCode], 'cURL Error during verification');
        die("Verification request failed");
    }

    $verifyResult = json_decode($verifyResponse, true);

    // Confirm status from verification
    if (isset($verifyResult['status']) && strtolower($verifyResult['status']) === 'completed') {
        addInvoicePayment(
            $invoiceId,
            $transactionId,
            $paymentAmount,
            $paymentFee,
            $gatewayModuleName
        );
        logTransaction($gatewayModuleName, $data, 'Success');
        echo "Success";
    } else {
        logTransaction($gatewayModuleName, ['webhook_data' => $data, 'verify_result' => $verifyResult, 'http_code' => $httpCode], 'Verification Failed');
        echo "Payment verification failed.";
    }

}
