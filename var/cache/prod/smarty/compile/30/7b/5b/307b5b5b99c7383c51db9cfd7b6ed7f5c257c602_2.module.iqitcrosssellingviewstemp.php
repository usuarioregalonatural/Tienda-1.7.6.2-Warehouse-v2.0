<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:45:06
  from 'module:iqitcrosssellingviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b50e2ba7695_60920129',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '307b5b5b99c7383c51db9cfd7b6ed7f5c257c602' => 
    array (
      0 => 'module:iqitcrosssellingviewstemp',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-small-grid.tpl' => 1,
  ),
),false)) {
function content_5e0b50e2ba7695_60920129 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="crossselling-products-modal">
  <p class="crossselling-products-modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers who bought this product also bought:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
  <div class="block-content">
    <div class="products slick-crossselling-products slick-products-carousel products-grid slick-default-carousel slick-arrows-middle">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-small-grid.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'carousel'=>true), 0, true);
?>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
</section>
<?php }
}
