<?php
/* Smarty version 3.1.48, created on 2026-03-20 10:40:59
  from '/home/cbonline/public_html/templates/six/includes/pageheader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcd6e3c53629_61715758',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b640b5ab98efca8267f0c8d5ff902cfb60c6445' => 
    array (
      0 => '/home/cbonline/public_html/templates/six/includes/pageheader.tpl',
      1 => 1748835068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bcd6e3c53629_61715758 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="header-lined">
    <h1><?php echo $_smarty_tpl->tpl_vars['title']->value;
if ($_smarty_tpl->tpl_vars['desc']->value) {?> <small><?php echo $_smarty_tpl->tpl_vars['desc']->value;?>
</small><?php }?></h1>
    <?php if ($_smarty_tpl->tpl_vars['showbreadcrumb']->value) {
$_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/breadcrumb.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}?>
</div>
<?php }
}
