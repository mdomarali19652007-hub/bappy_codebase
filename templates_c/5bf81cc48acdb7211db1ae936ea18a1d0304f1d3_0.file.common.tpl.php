<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:19:16
  from '/home/cbonline/public_html/templates/orderforms/lagom2/common.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdfdcc5f5b2_78190716',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5bf81cc48acdb7211db1ae936ea18a1d0304f1d3' => 
    array (
      0 => '/home/cbonline/public_html/templates/orderforms/lagom2/common.tpl',
      1 => 1767884117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/overwrites/common.tpl' => 1,
  ),
),false)) {
function content_69bcdfdcc5f5b2_78190716 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/common.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/overwrites/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?> 
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/templates/orderforms/<?php echo $_smarty_tpl->tpl_vars['carttpl']->value;?>
/js/order.min.js?v=<?php echo $_smarty_tpl->tpl_vars['RSThemes']->value['templateVersion'];?>
"><?php echo '</script'; ?>
>
<?php }
}
}
