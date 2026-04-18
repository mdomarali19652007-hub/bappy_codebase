<?php
/* Smarty version 3.1.48, created on 2026-03-23 05:55:36
  from '/home/cbonline/public_html/templates/orderforms/lagom2/includes/domain/modal/epp-code.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_69c088808dce49_39698438',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ee06aedf18738f5bf9ffc91644f09f4ee3523c55' => 
    array (
      0 => '/home/cbonline/public_html/templates/orderforms/lagom2/includes/domain/modal/epp-code.tpl',
      1 => 1767884117,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars[\'carttpl\']->value)."/includes/domain/modal/overwrites/epp-code.tpl' => 1,
  ),
),false)) {
function content_69c088808dce49_39698438 (Smarty_Internal_Template $_smarty_tpl) {
if (file_exists("templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/modal/overwrites/epp-code.tpl")) {?>
    <?php $_smarty_tpl->_subTemplateRender("file:templates/orderforms/".((string)$_smarty_tpl->tpl_vars['carttpl']->value)."/includes/domain/modal/overwrites/epp-code.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
} else { ?>
    <div class="modal modal-lg fade" id="modal-epp-code">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="lm lm-close"></i></span>
                    </button>
                    <h3 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.authCode'),$_smarty_tpl ) );?>
</h3>
                </div>
                <div class="modal-body">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.authCodeTooltip'),$_smarty_tpl ) );?>
</p>
                    <div class="form-group">
                        <label for="inputAuthCode"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.authCode'),$_smarty_tpl ) );?>
</label>
                        <div class="form-tooltip">
                            <input type="text" class="form-control" name="eppModal" data-trigger="manual" id="inputAuthCode" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.authCodePlaceholder'),$_smarty_tpl ) );?>
" data-toggle="tooltip" data-placement="left" title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'orderForm.required'),$_smarty_tpl ) );?>
" />
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-btn-loader data-epp-submit>
                        <span><?php echo $_smarty_tpl->tpl_vars['LANG']->value['confirm'];?>
</span>
                        <div class="loader loader-button hidden" >
                            <?php $_smarty_tpl->_subTemplateRender(((string)$_smarty_tpl->tpl_vars['template']->value)."/includes/common/loader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('classes'=>"spinner-sm spinner-light"), 0, true);
?>  
                        </div>
                    </button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['orderForm']['cancel'];?>
</button>
                </div>
            </div>
        </div>
    </div>
<?php }
}
}
