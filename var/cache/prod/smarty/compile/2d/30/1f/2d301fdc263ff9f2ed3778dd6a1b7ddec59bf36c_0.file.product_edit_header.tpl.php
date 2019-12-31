<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:54:33
  from '/var/www/html/modules/an_productfields/views/templates/hook/product_edit_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b45099b5946_32812618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d301fdc263ff9f2ed3778dd6a1b7ddec59bf36c' => 
    array (
      0 => '/var/www/html/modules/an_productfields/views/templates/hook/product_edit_header.tpl',
      1 => 1577795554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b45099b5946_32812618 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="row">
        <label class="control-label col-md-5"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Off/On','mod'=>'an_productfields'),$_smarty_tpl ) );?>
</b></label>
        <label class="control-label col-md-7"><b><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Position','mod'=>'an_productfields'),$_smarty_tpl ) );?>
</b></label>
</div>

<?php if ($_smarty_tpl->tpl_vars['morenew']->value) {?>
<style>
        #module_an_productfields .col-lg-3{
                float: left;margin-bottom: 0px; height:40px;
        }
        #module_an_productfields .col-lg-9{
                float: right; height:40px;
        }
</style>
<?php }
}
}
