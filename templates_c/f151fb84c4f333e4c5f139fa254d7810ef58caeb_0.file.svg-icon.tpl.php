<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:17:05
  from '/home/cbonline/public_html/templates/lagom2/includes/common/svg-icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdf59624784_80294043',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f151fb84c4f333e4c5f139fa254d7810ef58caeb' => 
    array (
      0 => '/home/cbonline/public_html/templates/lagom2/includes/common/svg-icon.tpl',
      1 => 1767884118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bcdf59624784_80294043 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/svg-icon.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/overwrites/svg-icon.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/custom/".((string)$_smarty_tpl->tpl_vars['icon']->value).".tpl")) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['onDark']->value))) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/custom/".((string)$_smarty_tpl->tpl_vars['icon']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('onDark'=>$_smarty_tpl->tpl_vars['onDark']->value), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/custom/".((string)$_smarty_tpl->tpl_vars['icon']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('onDark'=>false), 0, true);
?>
        <?php }?>
    <?php } elseif (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['icon']->value).".tpl")) {?>
        <?php if ((isset($_smarty_tpl->tpl_vars['onDark']->value))) {?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['icon']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('onDark'=>$_smarty_tpl->tpl_vars['onDark']->value), 0, true);
?>
        <?php } else { ?>
            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/assets/svg-icon/".((string)$_smarty_tpl->tpl_vars['icon']->value).".tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('onDark'=>false), 0, true);
?>
        <?php }?>
    <?php }
}
}
}
