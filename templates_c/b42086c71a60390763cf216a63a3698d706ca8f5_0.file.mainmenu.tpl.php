<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:17:05
  from '/home/cbonline/public_html/templates/lagom2/includes/menu/mainmenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdf59518a47_07454091',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b42086c71a60390763cf216a63a3698d706ca8f5' => 
    array (
      0 => '/home/cbonline/public_html/templates/lagom2/includes/menu/mainmenu.tpl',
      1 => 1767884118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bcdf59518a47_07454091 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/menu/overwrites/mainmenu.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/menu/overwrites/mainmenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="app-nav-menu" id="main-menu">
        <div class="container">
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['vars']['type'] == "condensed") {?>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/logo.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('ignoreMobileVersion'=>"true"), 0, true);
?>
            <?php }?>
            <ul class="menu menu-primary" data-nav>
                <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/navbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('navbar'=>$_smarty_tpl->tpl_vars['primaryNavbar']->value,'navtype'=>"primary"), 0, true);
?>
            </ul>
        </div>
    </div>
<?php }
}
}
