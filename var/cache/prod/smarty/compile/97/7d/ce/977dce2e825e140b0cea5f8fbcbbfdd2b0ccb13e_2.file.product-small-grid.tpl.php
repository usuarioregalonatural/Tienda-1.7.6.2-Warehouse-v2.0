<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:45:06
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/miniatures/product-small-grid.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b50e2bcfa22_57300819',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '977dce2e825e140b0cea5f8fbcbbfdd2b0ccb13e' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/miniatures/product-small-grid.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b50e2bcfa22_57300819 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19003202275e0b50e2bace92_64219888', 'product_miniature_item');
?>

<?php }
/* {block 'product_thumbnail'} */
class Block_2788464455e0b50e2bb52e3_17249371 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="thumbnail-container col-12">
                    <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                        <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                            <img
                                    src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['small']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    class="img-fluid"
                            >
                        <?php } else { ?>
                            <img
                                    src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['small_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['large_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    class="img-fluid"
                            >
                        <?php }?>
                    </a>
                </div>
            <?php
}
}
/* {/block 'product_thumbnail'} */
/* {block 'product_name'} */
class Block_18635650275e0b50e2bbe171_68818761 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <h4 class="product-title" ><a
                                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],40,'...' )), ENT_QUOTES, 'UTF-8');?>
</a></h4>
                <?php
}
}
/* {/block 'product_name'} */
/* {block 'product_reviews'} */
class Block_12282478645e0b50e2bc2529_75546214 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListReviews','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                <?php
}
}
/* {/block 'product_reviews'} */
/* {block 'product_price_and_shipping'} */
class Block_12468223115e0b50e2bc44b3_95889458 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
                        <div class="product-price-and-shipping">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"before_price"),$_smarty_tpl ) );?>

                            <span class="product-price" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php if ($_smarty_tpl->tpl_vars['product']->value['has_discount']) {?>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"old_price"),$_smarty_tpl ) );?>

                                <span class="regular-price text-muted"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['regular_price'], ENT_QUOTES, 'UTF-8');?>
</span>
                            <?php }?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'unit_price'),$_smarty_tpl ) );?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>'weight'),$_smarty_tpl ) );?>

                        </div>
                    <?php }?>
                <?php
}
}
/* {/block 'product_price_and_shipping'} */
/* {block 'product_miniature_item'} */
class Block_19003202275e0b50e2bace92_64219888 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_miniature_item' => 
  array (
    0 => 'Block_19003202275e0b50e2bace92_64219888',
  ),
  'product_thumbnail' => 
  array (
    0 => 'Block_2788464455e0b50e2bb52e3_17249371',
  ),
  'product_name' => 
  array (
    0 => 'Block_18635650275e0b50e2bbe171_68818761',
  ),
  'product_reviews' => 
  array (
    0 => 'Block_12282478645e0b50e2bc2529_75546214',
  ),
  'product_price_and_shipping' => 
  array (
    0 => 'Block_12468223115e0b50e2bc44b3_95889458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if (isset($_smarty_tpl->tpl_vars['elementor']->value) && $_smarty_tpl->tpl_vars['elementor']->value) {?><div class="<?php if (isset($_smarty_tpl->tpl_vars['carousel']->value) && $_smarty_tpl->tpl_vars['carousel']->value) {?>product-carousel<?php } else { ?>col-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbMobile']->value, ENT_QUOTES, 'UTF-8');?>
 col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbTablet']->value, ENT_QUOTES, 'UTF-8');?>
 col-lg-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');?>
 col-xl-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['nbDesktop']->value, ENT_QUOTES, 'UTF-8');
}?>"><?php }?>
    <article class="product-miniature product-miniature-small product-miniature-small-grid js-product-miniature" data-id-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product'], ENT_QUOTES, 'UTF-8');?>
"
             data-id-product-attribute="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_product_attribute'], ENT_QUOTES, 'UTF-8');?>
">
        <div class="row align-items-center list-small-gutters">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2788464455e0b50e2bb52e3_17249371', 'product_thumbnail', $this->tplIndex);
?>


            <div class="product-description col-12">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18635650275e0b50e2bbe171_68818761', 'product_name', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12282478645e0b50e2bc2529_75546214', 'product_reviews', $this->tplIndex);
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12468223115e0b50e2bc44b3_95889458', 'product_price_and_shipping', $this->tplIndex);
?>



            </div>
        </div>
    </article>
    <?php if (isset($_smarty_tpl->tpl_vars['elementor']->value) && $_smarty_tpl->tpl_vars['elementor']->value) {?></div><?php }
}
}
/* {/block 'product_miniature_item'} */
}
