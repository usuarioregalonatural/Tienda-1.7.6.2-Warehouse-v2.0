<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:45:44
  from '/var/www/html/modules/iqitelementor/views/templates/widgets/productslist.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b42f8e36c70_50640574',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66afd3af8fe0e25e0a3d3e902d01ce8fba70c0d9' => 
    array (
      0 => '/var/www/html/modules/iqitelementor/views/templates/widgets/productslist.tpl',
      1 => 1577795555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/miniatures/product-small.tpl' => 2,
    'file:catalog/_partials/miniatures/product.tpl' => 2,
    'file:catalog/_partials/miniatures/product-list.tpl' => 1,
  ),
),false)) {
function content_5e0b42f8e36c70_50640574 (Smarty_Internal_Template $_smarty_tpl) {
?>
<section class="elementor-products">
        <?php if ($_smarty_tpl->tpl_vars['view']->value == 'carousel_s' || $_smarty_tpl->tpl_vars['view']->value == 'carousel') {?>
            <div class="products elementor-products-carousel slick-products-carousel products-grid slick-arrows-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['arrows_position']->value, ENT_QUOTES, 'UTF-8');?>
"  data-slider_options='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['options']->value ));?>
'>
        <?php } else { ?>
            <div class="products row <?php if ($_smarty_tpl->tpl_vars['view']->value == 'list') {?>products-list<?php } else { ?>products-grid <?php }?>">
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['view']->value == 'grid_s') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'nbMobile'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['mobile'],'nbTablet'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['tablet'],'nbDesktop'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['desktop']), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == 'carousel_s') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'carousel'=>true), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == 'grid') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'nbMobile'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['mobile'],'nbTablet'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['tablet'],'nbDesktop'=>$_smarty_tpl->tpl_vars['slidesToShow']->value['desktop']), 0, true);
?>
            <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == 'list') {?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product-list.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true), 0, true);
?>
            <?php } else { ?>
                <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/miniatures/product.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product']->value,'elementor'=>true,'carousel'=>true), 0, true);
?>
            <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</section>
<?php }
}
