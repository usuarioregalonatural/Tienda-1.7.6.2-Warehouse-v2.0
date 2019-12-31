<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:54:33
  from '/var/www/html/modules/an_productfields/views/templates/hook/product_edit_field.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b45099c6a89_94130496',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '641776a67d5d95407121841b3be72d291a7a5bef' => 
    array (
      0 => '/var/www/html/modules/an_productfields/views/templates/hook/product_edit_field.tpl',
      1 => 1577795554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b45099c6a89_94130496 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
    <div class="control-label col-md-5" style="padding-top: 2px;">
        <?php if (!$_smarty_tpl->tpl_vars['an_disabledfield']->value) {?>
            <input type="checkbox" data-toggle="switch" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputName']->value,'htmlall','UTF-8' ));?>
[is_enabled]"<?php if ($_smarty_tpl->tpl_vars['productData']->value != false && $_smarty_tpl->tpl_vars['productData']->value->is_enabled) {?> checked="checked"<?php }?> />
        <?php } else { ?>
            <b style="float: left;border-bottom: solid #25b9d7;"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Activated with field settings','mod'=>'an_productfields'),$_smarty_tpl ) );?>
</b>
        <?php }?>
    </div>
    <div class="control-label col-md-7">
        <?php if (!$_smarty_tpl->tpl_vars['an_disabledfield']->value) {?><input type="text" class="form-control" style="width:150px;" name="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['inputName']->value,'html','UTF-8' ));?>
[position]" value="<?php if ($_smarty_tpl->tpl_vars['productData']->value != false) {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['productData']->value->position,'intval' ));
}?>"/><?php }?>
    </div>
</div>
<?php }
}
