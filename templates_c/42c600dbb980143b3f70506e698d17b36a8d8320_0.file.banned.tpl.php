<?php
/* Smarty version 3.1.48, created on 2026-03-19 17:56:31
  from '/home/cbonline/public_html/templates/twenty-one/banned.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bbeb77ed9081_64655534',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '42c600dbb980143b3f70506e698d17b36a8d8320' => 
    array (
      0 => '/home/cbonline/public_html/templates/twenty-one/banned.tpl',
      1 => 1748835068,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bbeb77ed9081_64655534 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="alert alert-danger">
    <strong>
        <i class="fas fa-gavel"></i>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedyourip'),$_smarty_tpl ) );?>

        <?php echo $_smarty_tpl->tpl_vars['ip']->value;?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedhasbeenbanned'),$_smarty_tpl ) );?>

    </strong>
    <ul>
        <li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedbanreason'),$_smarty_tpl ) );?>
:
            <strong><?php echo $_smarty_tpl->tpl_vars['reason']->value;?>
</strong>
        </li>
        <li>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'bannedbanexpires'),$_smarty_tpl ) );?>
:
            <?php echo $_smarty_tpl->tpl_vars['expires']->value;?>

        </li>
    </ul>
</div>
<?php }
}
