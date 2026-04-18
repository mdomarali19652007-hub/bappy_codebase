<?php
/* Smarty version 3.1.48, created on 2026-04-11 15:14:08
  from '/home/cbonline/public_html/templates/lagom2/banned.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69da17e8abbf40_42605521',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '24a976c04e9747cadd8b89e3b5edceb78bd90918' => 
    array (
      0 => '/home/cbonline/public_html/templates/lagom2/banned.tpl',
      1 => 1767884118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69da17e8abbf40_42605521 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="message message-danger message-lg message-no-data ">
        <div class="message-icon">
            <i class="lm lm-close"></i>
        </div>
        <h2 class="message-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedyourip'];?>
 <?php echo $_smarty_tpl->tpl_vars['ip']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedhasbeenbanned'];?>
</h2>
        <h4><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedbanreason'];?>
: <strong><?php echo $_smarty_tpl->tpl_vars['reason']->value;?>
</strong></h4>
        <h5><?php echo $_smarty_tpl->tpl_vars['LANG']->value['bannedbanexpires'];?>
: <?php echo $_smarty_tpl->tpl_vars['expires']->value;?>
</h5>
    </div>
<?php }
}
}
