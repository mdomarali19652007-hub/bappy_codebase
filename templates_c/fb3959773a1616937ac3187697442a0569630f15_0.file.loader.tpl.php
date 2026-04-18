<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:17:05
  from '/home/cbonline/public_html/templates/lagom2/includes/common/loader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdf595a6699_37471556',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fb3959773a1616937ac3187697442a0569630f15' => 
    array (
      0 => '/home/cbonline/public_html/templates/lagom2/includes/common/loader.tpl',
      1 => 1767884118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bcdf595a6699_37471556 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/loader.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?> 
    <div class="spinner <?php echo $_smarty_tpl->tpl_vars['classes']->value;?>
">
        <div class="rect1"></div>
        <div class="rect2"></div>
        <div class="rect3"></div>
        <div class="rect4"></div>
        <div class="rect5"></div>
    </div>
<?php }?>     <?php }
}
