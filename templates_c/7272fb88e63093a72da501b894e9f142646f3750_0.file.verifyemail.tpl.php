<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:17:06
  from '/home/cbonline/public_html/templates/lagom2/includes/verifyemail.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdf5a038ee6_35428053',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7272fb88e63093a72da501b894e9f142646f3750' => 
    array (
      0 => '/home/cbonline/public_html/templates/lagom2/includes/verifyemail.tpl',
      1 => 1767884118,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_69bcdf5a038ee6_35428053 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/".((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/verifyemail.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/overwrites/verifyemail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>  
<?php } else { ?>
    <?php if ($_smarty_tpl->tpl_vars['showEmailVerificationBanner']->value) {?>
        <div class="alert alert-lagom alert-warning verification-banner email-verification">
            <div class="container">
                <div class="alert-body">
                    <div>
                        <i class="ls ls-exclamation-circle"></i><?php echo $_smarty_tpl->tpl_vars['LANG']->value['verifyEmailAddress'];?>

                    </div>
                    <button id="btnResendVerificationEmail" class="btn btn-warning btn-sm btn-resend-verify-email" data-email-sent="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['emailSent'];?>
" data-error-msg="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['error'];?>
" data-uri="<?php echo routePath('user-email-verification-resend');?>
">
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['resendEmail'];?>
</span>
                        <span class="loader loader-button">
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                        </span>
                    </button>
                </div>
                <div class="alert-actions">
                    <button id="btnEmailVerificationClose" data-uri="<?php echo routePath('dismiss-email-verification');?>
" type="button" class="btn btn-sm btn-icon close"><i class="ls ls-close"></i></button>
                </div> 
            </div>
        </div>
    <?php }
}
}
}
