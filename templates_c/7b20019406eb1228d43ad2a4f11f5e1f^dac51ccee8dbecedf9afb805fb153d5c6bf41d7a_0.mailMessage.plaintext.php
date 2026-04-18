<?php
/* Smarty version 3.1.48, created on 2026-03-19 19:11:36
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bbfd1010d9a5_64487157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1773927696,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bbfd1010d9a5_64487157 (Smarty_Internal_Template $_smarty_tpl) {
?>Dear <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
, 

This message is to confirm that your domain purchase has been successful. The details of the domain purchase are below: 

Registration Date: <?php echo $_smarty_tpl->tpl_vars['domain_reg_date']->value;?>

Domain: <?php echo $_smarty_tpl->tpl_vars['domain_name']->value;?>

Registration Period: <?php echo $_smarty_tpl->tpl_vars['domain_reg_period']->value;?>

Amount: <?php echo $_smarty_tpl->tpl_vars['domain_first_payment_amount']->value;?>

Next Due Date: <?php echo $_smarty_tpl->tpl_vars['domain_next_due_date']->value;?>
 

You may login to your client area at <?php echo $_smarty_tpl->tpl_vars['whmcs_url']->value;?>
 to manage your new domain. 

<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
