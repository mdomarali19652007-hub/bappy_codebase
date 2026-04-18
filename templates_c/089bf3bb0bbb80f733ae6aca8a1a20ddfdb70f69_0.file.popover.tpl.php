<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:17:45
  from '/home/cbonline/public_html/modules/addons/RSThemes/views/adminarea/includes/helpers/popover.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdf81cda7f1_38346633',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '089bf3bb0bbb80f733ae6aca8a1a20ddfdb70f69' => 
    array (
      0 => '/home/cbonline/public_html/modules/addons/RSThemes/views/adminarea/includes/helpers/popover.tpl',
      1 => 1767884115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bcdf81cda7f1_38346633 (Smarty_Internal_Template $_smarty_tpl) {
?><span class="<?php echo $_smarty_tpl->tpl_vars['popoverClasses']->value;?>
 popover-container" data-popover-container>
    <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" data-popover-open="hover">
        <circle cx="6" cy="6" r="5.5" stroke="#B9BDC5"/>
        <path d="M7 6V9H5V6H7ZM5 5V3H7V5H5Z" fill="#B9BDC5"/>
    </svg>
    <div class="popover" data-popover>
        <div class="popover__body">
            <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['popoverBody']->value, ENT_QUOTES);?>
                                                   
        </div>
        <?php if ($_smarty_tpl->tpl_vars['popoverFooter']->value && $_smarty_tpl->tpl_vars['popoverFooter']->value != '') {?>
            <div class="popover__footer">
                <?php echo htmlspecialchars_decode($_smarty_tpl->tpl_vars['popoverFooter']->value, ENT_QUOTES);?>

            </div>
        <?php }?>
    </div>
</span><?php }
}
