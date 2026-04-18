<?php
/* Smarty version 3.1.48, created on 2026-03-20 11:19:16
  from '/home/cbonline/public_html/templates/orderforms/lagom2/includes/domain/captcha.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69bcdfdccb6782_48380562',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9b431142c9009cb6644193138fa8228f7bb5eda0' => 
    array (
      0 => '/home/cbonline/public_html/templates/orderforms/lagom2/includes/domain/captcha.tpl',
      1 => 1767884117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/overwrites/captcha.tpl' => 1,
  ),
),false)) {
function content_69bcdfdccb6782_48380562 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/captcha.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/overwrites/captcha.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->isEnabledForForm($_smarty_tpl->tpl_vars['captchaForm']->value) && !$_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isInvisible()) {?>
        <div class="domain-search-captcha domainchecker-homepage-captcha <?php if ($_smarty_tpl->tpl_vars['pageClass']->value) {
echo $_smarty_tpl->tpl_vars['pageClass']->value;
}?>">
            <div class="captcha-container captcha captcha-centered text-center m-a form-group" id="captchaContainer">
                <?php if ($_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isEnabled()) {?>
                    <div class="recaptcha-container"></div>
                <?php } elseif (!$_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isEnabled()) {?>
                    <div class="captchatext text-light"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"cartSimpleCaptcha"),$_smarty_tpl ) );?>
</div>
                    <div class="input-group">                                 
                        <div class="input-group-addon">
                            <img id="inputCaptchaImage" src="includes/verifyimage.php" align="middle" />
                        </div>    
                        <input id="inputCaptcha" type="text" name="code" maxlength="6" class="form-control" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                    </div>
                <?php }?>
            </div>
        </div>
    <?php }
}
}
}
