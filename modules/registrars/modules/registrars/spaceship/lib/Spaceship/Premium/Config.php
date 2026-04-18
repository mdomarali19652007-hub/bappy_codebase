<?php

namespace Spaceship\Premium;

/**
 * Premium Module Configuration
 * 
 * Stores product-specific metadata such as EDD Item IDs.
 * This file is part of the premium module package and allows
 * the module to be self-identifying without framework updates.
 */
class Config
{
    const FRIENDLY_NAME = 'Spaceship Registrar';

    /**
     * EDD Item IDs for this product.
     * trial: Item ID for the trial version.
     * lifetime: Item ID for the lifetime/pro version.
     */
    const PRODUCT_IDS = [
        'unified' => 424,
        'trial' => 402,
        'lifetime' => 395
    ];

    /**
     * Map EDD Price IDs to license status types.
     * Only used for unified products (e.g. ID 424).
     */
    const VARIATIONS = [
        1 => 'trial',
        2 => 'lifetime'
    ];

    /**
     * Enhance module configuration with premium fields and UI status.
     * This keeps the main spaceship_getConfigArray neat.
     */
    public static function enhanceConfig($config)
    {
        // 1. Resolve UI metadata from Bridge
        if (class_exists('\JobFew\Premium\Bridge')) {
            $ui = \JobFew\Premium\Bridge::getStatusUIMetadata($config, self::PRODUCT_IDS, self::VARIATIONS);
            $config['Description']['Value'] = str_replace(
                ['{PRO_BADGE}', '{STATUS_LINE}'],
                [$ui['badge'], $ui['status_line']],
                $config['Description']['Value']
            );

            // 2. Only add premium-only config fields when the license is actually active
            if ($ui['active']) {
                $config['EnableAutoSync'] = [
                    'FriendlyName' => 'Enable Automatic TLD Sync',
                    'Type' => 'yesno',
                    'Default' => 'on',
                    'Description' => 'Allow the daily WHMCS cron to sync pricing automatically.',
                ];

                $config['PremiumMarkup'] = [
                    'FriendlyName' => 'Premium Domain Markup (%)',
                    'Type' => 'text',
                    'Size' => '5',
                    'Default' => '10',
                    'Description' => 'Percentage markup added to real-time Premium Domain costs (0 = no markup).',
                ];
            }
        }

        return $config;
    }

    /**
     * Check if the premium features are currently active.
     */
    public static function isActive($params = [])
    {
        if (class_exists('\JobFew\Premium\Bridge')) {
            $license = \JobFew\Premium\Bridge::getLicenseStatus($params, false, self::PRODUCT_IDS);
            return (bool) $license['active'];
        }
        return false;
    }
}
