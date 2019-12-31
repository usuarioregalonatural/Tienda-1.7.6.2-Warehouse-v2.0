<?php
/* Smarty version 3.1.33, created on 2019-12-31 19:40:41
  from 'module:iqitcrosssellingviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b9629cbe6a1_41875131',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9dd94f97a77aa129d38521b092ab1fb8898f011' => 
    array (
      0 => 'module:iqitcrosssellingviewstemp',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product.tpl' => 1,
  ),
),false)) {
function content_5e0b9629cbe6a1_41875131 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="crossselling-products block block-section">
  <h4 class="section-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Customers who bought this product also bought:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
  </h4>
  <div class="block-content">
    <div class="products slick-products-carousel products-grid slick-default-carousel slick-arrows-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_crsl_style'], ENT_QUOTES, 'UTF-8');?>
">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'carousel'=>true), 0, true);
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
