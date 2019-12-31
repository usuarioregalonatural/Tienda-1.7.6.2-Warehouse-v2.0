<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:58:01
  from '/var/www/html/modules/an_productfields/views/templates/hook/product_buttons_ipa.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b45d94c2e46_97837945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a2e70fb61bda482c391a8b1691df06bc10e7c222' => 
    array (
      0 => '/var/www/html/modules/an_productfields/views/templates/hook/product_buttons_ipa.tpl',
      1 => 1577795554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b45d94c2e46_97837945 (Smarty_Internal_Template $_smarty_tpl) {
if (!is_null($_smarty_tpl->tpl_vars['an_ipa']->value)) {?>
    <input type="hidden" id="an_pf_ipa" name="an_pf_ipa" value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_ipa']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
<?php }
}
}
