<?php
/* Smarty version 3.1.48, created on 2026-03-19 18:47:38
  from '/home/cbonline/public_html/templates/twenty-one/includes/alert.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bbf772c63006_97689924',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '20dd7b5b9f77713417ebca5bdb76def1cc321404' => 
    array (
      0 => '/home/cbonline/public_html/templates/twenty-one/includes/alert.tpl',
      1 => 1748835068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bbf772c63006_97689924 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-<?php if ($_smarty_tpl->tpl_vars['type']->value == "error") {?>danger<?php } elseif ($_smarty_tpl->tpl_vars['type']->value) {
echo $_smarty_tpl->tpl_vars['type']->value;
} else { ?>info<?php }
if ($_smarty_tpl->tpl_vars['textcenter']->value) {?> text-center<?php }
if ($_smarty_tpl->tpl_vars['additionalClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['additionalClasses']->value;
}
if ($_smarty_tpl->tpl_vars['hide']->value) {?> w-hidden<?php }?>"<?php if ($_smarty_tpl->tpl_vars['idname']->value) {?> id="<?php echo $_smarty_tpl->tpl_vars['idname']->value;?>
"<?php }?>>
<?php if ($_smarty_tpl->tpl_vars['errorshtml']->value) {?>
    <strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'clientareaerrors'),$_smarty_tpl ) );?>
</strong>
    <ul>
        <?php echo $_smarty_tpl->tpl_vars['errorshtml']->value;?>

    </ul>
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['title']->value) {?>
        <h2><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</h2>
    <?php }?>
    <?php echo $_smarty_tpl->tpl_vars['msg']->value;?>

<?php }?>
</div>
<?php }
}
