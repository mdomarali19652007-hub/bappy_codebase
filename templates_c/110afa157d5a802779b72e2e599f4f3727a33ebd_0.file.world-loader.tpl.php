<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:19:16
  from '/home/cbonline/public_html/templates/orderforms/lagom2/includes/domain/world-loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdfdcce77e4_06782320',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '110afa157d5a802779b72e2e599f4f3727a33ebd' => 
    array (
      0 => '/home/cbonline/public_html/templates/orderforms/lagom2/includes/domain/world-loader.tpl',
      1 => 1767884117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bcdfdcce77e4_06782320 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="world-loader <?php if ($_smarty_tpl->tpl_vars['type']->value == "panel") {?>world-loader-panel<?php }?> panel hidden">
    <div class="world-loader-content panel-body">
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/img/loaders/world-loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
    </div>  
</div><?php }
}
