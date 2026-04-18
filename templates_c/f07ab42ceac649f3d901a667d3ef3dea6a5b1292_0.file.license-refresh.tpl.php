<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:17:45
  from '/home/cbonline/public_html/modules/addons/RSThemes/views/adminarea/includes/modals/license-refresh.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdf81ceb7a3_31057057',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f07ab42ceac649f3d901a667d3ef3dea6a5b1292' => 
    array (
      0 => '/home/cbonline/public_html/modules/addons/RSThemes/views/adminarea/includes/modals/license-refresh.tpl',
      1 => 1767884115,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bcdf81ceb7a3_31057057 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="modal" id="refreshLicense" data-refresh-license-modal>
    <div class="modal__dialog">
        <div class="modal__content">
            <div class="modal__top top">
                <div class="top__title text-danger"></i><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['refresh_license']['title'];?>
</div>
                <div class="top__toolbar">
                    <button class="close btn btn--xs btn--icon btn--link" data-dismiss="lu-modal" aria-label="Close">
                        <i class="btn__icon lm lm-close"></i>
                    </button>
                </div>
            </div>
            <div class="modal__body p-b-0x">
                <p class="m-b-3x"><?php echo $_smarty_tpl->tpl_vars['lang']->value['modal']['refresh_license']['desc'];?>
</p>
            </div>
            <div class="modal__actions">
                <button class="btn btn--primary" data-refresh-license-modal-btn data-btn-loader>
                    <span class="btn__preloader preloader preloader--light"></span>
                    <span class="btn__text export__btn">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['confirm'];?>

                    </span>
                </button>
                <button data-dismiss="lu-modal" aria-label="Close" type="button" class="btn btn--default btn--outline">
                    <span class="btn__text">
                        <?php echo $_smarty_tpl->tpl_vars['lang']->value['general']['cancel'];?>

                    </span>
                </button>
            </div>
        </div>
    </div>
</div>
<?php }
}
