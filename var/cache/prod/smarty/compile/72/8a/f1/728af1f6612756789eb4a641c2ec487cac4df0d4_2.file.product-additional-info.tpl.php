<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:04:24
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/product-additional-info.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b4758a72e67_40643364',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '728af1f6612756789eb4a641c2ec487cac4df0d4' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/product-additional-info.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b4758a72e67_40643364 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="product-additional-info">
  <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductAdditionalInfo','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

</div>
<?php }
}
