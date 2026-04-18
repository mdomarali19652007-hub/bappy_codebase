<?php
/* Smarty version 3.1.48, created on 2026-03-20 13:58:00
  from '/home/cbonline/public_html/templates/lagom2/includes/flashmessage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bd05105cb861_21107296',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6ce969327841446742a7ef8817e51aca3ac54413' => 
    array (
      0 => '/home/cbonline/public_html/templates/lagom2/includes/flashmessage.tpl',
      1 => 1767884118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bd05105cb861_21107296 (Smarty_Internal_Template $_smarty_tpl) {
$_prefixVariable1 = get_flash_message();
$_smarty_tpl->_assignInScope('message', $_prefixVariable1);
if ($_prefixVariable1) {?>
    <div class="alert alert-lagom alert-<?php if ($_smarty_tpl->tpl_vars['message']->value['type'] == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'success') {?>success<?php } elseif ($_smarty_tpl->tpl_vars['message']->value['type'] == 'warning') {?>warning<?php } else { ?>info<?php }?>">
        <div class="alert-body">
            <?php echo $_smarty_tpl->tpl_vars['message']->value['text'];?>

        </div>
    </div>
<?php }
}
}
