<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:17:05
  from '/home/cbonline/public_html/templates/lagom2/includes/common/svg-illustration.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdf596128a3_39871033',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e8233e51f45dc645aae90b1802a0220bd86e3a8b' => 
    array (
      0 => '/home/cbonline/public_html/templates/lagom2/includes/common/svg-illustration.tpl',
      1 => 1767884118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bcdf596128a3_39871033 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/svg-illustration.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/svg-illustration.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/custom/".((string)$_smarty_tpl->tpl_vars['illustration']->value).".tpl")) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/custom/".((string)$_smarty_tpl->tpl_vars['illustration']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php } elseif (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['illustration']->value).".tpl")) {?>
        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-illustrations/".((string)$_smarty_tpl->tpl_vars['illustration']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php }
}
}
}
