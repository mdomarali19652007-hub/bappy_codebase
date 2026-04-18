<?php
/* Smarty version 3.1.48, created on 2026-03-23 05:55:36
  from '/home/cbonline/public_html/templates/orderforms/lagom2/domaintransfer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69c088808ccff2_46513189',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fc3475655de0cf602232ea0e6224d2c5959d7fb' => 
    array (
      0 => '/home/cbonline/public_html/templates/orderforms/lagom2/domaintransfer.tpl',
      1 => 1767884117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/common.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/sidebar-categories-collapsed.tpl' => 1,
    'file:orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/modal/epp-code.tpl' => 1,
  ),
),false)) {
function content_69c088808ccff2_46513189 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value])) && file_exists($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'])) {?>
    <?php $_smarty_tpl->_subTemplateRender($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['fullPath'], $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/common.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <div class="main-grid<?php if ($_smarty_tpl->tpl_vars['mainGrid']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainGrid']->value;
}?>">
        <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['pages'][$_smarty_tpl->tpl_vars['templatefile']->value]['config']['hideSidebar'] != '1') {?>
        <div class="main-sidebar hidden-xs hidden-sm hidden-md <?php if ($_smarty_tpl->tpl_vars['sidebarOnRight']->value || $_smarty_tpl->tpl_vars['RSThemes']->value['layouts']['name'] == 'left-nav-wide') {?> main-sidebar-right <?php }?>">
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?><div class="sidebar-sticky" <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['show_affixed_navigation'] == 'enabled') {?>data-sidebar-sticky<?php }?>><?php }?>
                <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['addonSettings']['sticky_sidebars'] == "true") {?></div><?php }?>
        </div>
        <?php }?>
        <div class="main-content<?php if ($_smarty_tpl->tpl_vars['mainContentClasses']->value) {?> <?php echo $_smarty_tpl->tpl_vars['mainContentClasses']->value;
}?>">
            <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/sidebar-categories-collapsed.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
            <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.transferExtend'),$_smarty_tpl ) );?>
*</h5>        
            <form method="post" action="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php" id="frmDomainTransfer">
                <input type="hidden" name="a" value="addDomainTransfer">
                <input name="epp" type="hidden" value="">
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel">
                            <div class="panel-body">
                                <div id="transferUnavailable" class="alert alert-warning slim-alert text-center hidden"></div>
                                <div class="form-group">
                                    <label for="inputTransferDomain"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'domainname'),$_smarty_tpl ) );?>
</label>
                                    <input type="text" class="form-control" name="domain" id="inputTransferDomain" value="<?php echo $_smarty_tpl->tpl_vars['lookupTerm']->value;?>
" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'yourdomainplaceholder'),$_smarty_tpl ) );?>
.<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'yourtldplaceholder'),$_smarty_tpl ) );?>
" data-toggle="tooltip" data-placement="top" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.enterDomain'),$_smarty_tpl ) );?>
" />
                                </div>
                                <?php if ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && !$_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isEnabled()) {?>
                                    <div class="form-group captcha-container" id="captchaContainer">
                                        <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'cartSimpleCaptcha'),$_smarty_tpl ) );?>
</label>
                                        <div class=" input-group w-100">
                                            <div class="input-group-addon">
                                                <img id="inputCaptchaImage" src="<?php echo $_smarty_tpl->tpl_vars['systemurl']->value;?>
includes/verifyimage.php" />
                                            </div>
                                            <input id="inputCaptcha" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['enter_code'];?>
" type="text" name="code" maxlength="6" class="form-control" data-toggle="tooltip" data-placement="right" data-trigger="manual" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                                        </div>
                                    </div>
                                <?php } elseif ($_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isEnabled() && !$_smarty_tpl->tpl_vars['captcha']->value->recaptcha->isInvisible()) {?>
                                    <div class="form-group recaptcha-container" id="captchaContainer"></div> 
                                <?php }?>
                                <button type="submit" id="btnTransferDomain" class="btn btn-primary <?php if ($_smarty_tpl->tpl_vars['RSThemes']->value['styles']['name'] == "modern") {?>btn-lg<?php }?> btn-transfer <?php echo $_smarty_tpl->tpl_vars['captcha']->value->getButtonClass($_smarty_tpl->tpl_vars['captchaForm']->value);?>
">
                                    <span id="addToCart"><i class="ls ls-basket m-r-8"></i><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>"ordernowbutton"),$_smarty_tpl ) );?>
</span>
                                    <span class="loader loader-button">
                                        <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm"), 0, true);
?>  
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <p class="text-light">* <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.extendExclusions'),$_smarty_tpl ) );?>
</p>
        </div>
    </div>
        <?php $_smarty_tpl->_subTemplateRender("file:orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/modal/epp-code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
    <?php if (($_smarty_tpl->tpl_vars['lookupTerm']->value && !$_smarty_tpl->tpl_vars['captchaError']->value && !$_smarty_tpl->tpl_vars['invalid']->value) || (!$_smarty_tpl->tpl_vars['captcha']->value->isEnabled() && $_smarty_tpl->tpl_vars['lookupTerm']->value && !$_smarty_tpl->tpl_vars['invalid']->value)) {?>
    <?php echo '<script'; ?>
>
        jQuery(document).ready(function() {
            
                setTimeout(function(){
                    jQuery('#btnTransferDomain').trigger('click');
                }, 500);
            
        });
    <?php echo '</script'; ?>
>              
    <?php }
}
}
}
