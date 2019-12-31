<?php
/* Smarty version 3.1.33, created on 2019-12-31 19:38:25
  from '/var/www/html/themes/warehouse/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b95a12fcf30_94633681',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b3e9579d171619075d8319c9995f0203e650b0ea' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/product.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/product-cover-thumbnails.tpl' => 1,
    'file:catalog/_partials/product-prices.tpl' => 2,
    'file:catalog/_partials/product-customization.tpl' => 1,
    'file:catalog/_partials/product-variants.tpl' => 1,
    'file:catalog/_partials/miniatures/pack-product.tpl' => 1,
    'file:catalog/_partials/product-add-to-cart.tpl' => 1,
    'file:catalog/_partials/product-discounts.tpl' => 1,
    'file:catalog/_partials/product-additional-info.tpl' => 1,
    'file:catalog/_partials/miniatures/product-small.tpl' => 1,
    'file:catalog/_partials/_product_partials/product-tabs-h.tpl' => 1,
    'file:catalog/_partials/_product_partials/product-tabs-sections.tpl' => 1,
    'file:catalog/_partials/miniatures/product.tpl' => 1,
    'file:catalog/_partials/product-images-modal.tpl' => 1,
  ),
),false)) {
function content_5e0b95a12fcf30_94633681 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6200518405e0b95a12943f7_36711341', 'head_seo');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2340352645e0b95a1296222_75166814', 'head_og_tags');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11369926045e0b95a129d393_13023079', 'head');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12284878835e0b95a12abda1_68455664', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_6200518405e0b95a12943f7_36711341 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_6200518405e0b95a12943f7_36711341',
  ),
);
public $prepend = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_og_tags'} */
class Block_2340352645e0b95a1296222_75166814 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_2340352645e0b95a1296222_75166814',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:type" content="product">
    <meta property="og:url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:width" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['width'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:image:height" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['height'], ENT_QUOTES, 'UTF-8');?>
">
<?php
}
}
/* {/block 'head_og_tags'} */
/* {block 'head'} */
class Block_11369926045e0b95a129d393_13023079 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_11369926045e0b95a129d393_13023079',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_price']) {?>
        <meta property="product:pretax_price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_tax_exc'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:pretax_price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:price:amount" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price_amount'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:price:currency" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currency']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php if (isset($_smarty_tpl->tpl_vars['product']->value['weight']) && ($_smarty_tpl->tpl_vars['product']->value['weight'] != 0)) {?>
        <meta property="product:weight:value" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight'], ENT_QUOTES, 'UTF-8');?>
">
        <meta property="product:weight:units" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['weight_unit'], ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_bg_category']) {?>
        <?php $_smarty_tpl->_assignInScope('categoryImage', "img/c/".((string)$_smarty_tpl->tpl_vars['product']->value['id_category_default'])."-category_default.jpg");?>
        <?php if (file_exists($_smarty_tpl->tpl_vars['categoryImage']->value)) {?>
            <style> #wrapper .breadcrumb{  background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getCatImageLink($_smarty_tpl->tpl_vars['product']->value['category'],$_smarty_tpl->tpl_vars['product']->value['id_category_default'],'category_default'), ENT_QUOTES, 'UTF-8');?>
'); }</style>
        <?php }?>
    <?php }?>

<?php
}
}
/* {/block 'head'} */
/* {block 'product_cover_thumbnails'} */
class Block_18398151625e0b95a12aebd5_93267392 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-cover-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_cover_thumbnails'} */
/* {block 'after_cover_thumbnails'} */
class Block_8421743195e0b95a12b06b7_17390734 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <div class="after-cover-tumbnails text-center"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterProductThumbs'),$_smarty_tpl ) );?>
</div>
                            <?php
}
}
/* {/block 'after_cover_thumbnails'} */
/* {block 'page_content'} */
class Block_7472809535e0b95a12ae3c4_37213108 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18398151625e0b95a12aebd5_93267392', 'product_cover_thumbnails', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8421743195e0b95a12b06b7_17390734', 'after_cover_thumbnails', $this->tplIndex);
?>


                        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_12486500025e0b95a12adb72_81228683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <section class="page-content" id="content">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7472809535e0b95a12ae3c4_37213108', 'page_content', $this->tplIndex);
?>

                    </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_brand_below'} */
class Block_19415521275e0b95a12b3d38_37250639 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                        <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <div class="product-manufacturer product-manufacturer-next float-right">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" />
                                            </a>
                                        </div>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'page_title'} */
class Block_16720869335e0b95a12bad96_23740397 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_5524021595e0b95a12ba537_69243751 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h1 class="h1 page-title" itemprop="name"><span><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16720869335e0b95a12bad96_23740397', 'page_title', $this->tplIndex);
?>
</span></h1>
                    <?php
}
}
/* {/block 'page_header'} */
/* {block 'product_brand_below'} */
class Block_2196570355e0b95a12bc8c9_62672309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                            <div class="product-manufacturer mb-3">
                                            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
"
                                                     class="img-fluid  manufacturer-logo" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
" />
                                            </a>
                                            </div>
                                        <?php } else { ?>
                                            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                            <span>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
                                        <?php }?>

                                <?php }?>
                            <?php }?>
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'next-title') {?>
                                <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
                                    <?php if (!isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                                        <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
                                        <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
:</label>
                                        <span>
                                        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
                                        </span>
                                    <?php }?>
                                <?php }?>
                            <?php }?>
                        <?php
}
}
/* {/block 'product_brand_below'} */
/* {block 'hook_display_product_rating'} */
class Block_10357771195e0b95a12ca8c8_26004309 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductRating','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_product_rating'} */
/* {block 'product_prices'} */
class Block_8073074755e0b95a12ccca4_44396160 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                            <?php
}
}
/* {/block 'product_prices'} */
/* {block 'page_header_container'} */
class Block_605533075e0b95a12b34c0_34608325 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product_header_container clearfix">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19415521275e0b95a12b3d38_37250639', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5524021595e0b95a12ba537_69243751', 'page_header', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2196570355e0b95a12bc8c9_62672309', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10357771195e0b95a12ca8c8_26004309', 'hook_display_product_rating', $this->tplIndex);
?>


                        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_price_position'] == 'below-title') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8073074755e0b95a12ccca4_44396160', 'product_prices', $this->tplIndex);
?>

                        <?php }?>
                    </div>
                <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_13825619785e0b95a12ce8e0_69263321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="product-description-short-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                             itemprop="description" class="rte-content"><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
</div>
                    <?php
}
}
/* {/block 'product_description_short'} */
/* {block 'product_customization'} */
class Block_3021490025e0b95a12d2420_86484974 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php $_smarty_tpl->_subTemplateRender("file:catalog/_partials/product-customization.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('customizations'=>$_smarty_tpl->tpl_vars['product']->value['customizations']), 0, false);
?>
                        <?php
}
}
/* {/block 'product_customization'} */
/* {block 'product_variants'} */
class Block_15460081775e0b95a12d73f5_68705606 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductVariants','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-variants.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_variants'} */
/* {block 'product_miniature'} */
class Block_16792040685e0b95a12dc017_36957973 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/pack-product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_pack']->value), 0, true);
?>
                                                <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_pack'} */
class Block_16367310875e0b95a12d9339_45377738 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php if ($_smarty_tpl->tpl_vars['packItems']->value) {?>
                                        <section class="product-pack">
                                            <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'This pack contains','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                                            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['packItems']->value, 'product_pack');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_pack']->value) {
?>
                                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16792040685e0b95a12dc017_36957973', 'product_miniature', $this->tplIndex);
?>

                                            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                        </section>
                                    <?php }?>
                                <?php
}
}
/* {/block 'product_pack'} */
/* {block 'product_prices'} */
class Block_20195667135e0b95a12df070_42608642 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-prices.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
                                    <?php
}
}
/* {/block 'product_prices'} */
/* {block 'product_add_to_cart'} */
class Block_3241281335e0b95a12e0799_70212482 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-add-to-cart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_add_to_cart'} */
/* {block 'product_discounts'} */
class Block_11838688535e0b95a12e1b65_49432742 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-discounts.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_discounts'} */
/* {block 'product_additional_info'} */
class Block_4474845635e0b95a12e2f27_78759153 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-additional-info.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                                <?php
}
}
/* {/block 'product_additional_info'} */
/* {block 'product_refresh'} */
class Block_20779022065e0b95a12e42d4_26392197 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_13171973985e0b95a12d44a5_28865196 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <form action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['cart'], ENT_QUOTES, 'UTF-8');?>
" method="post" id="add-to-cart-or-refresh">
                                <input type="hidden" name="token" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['static_token']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <input type="hidden" name="id_product" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="product_page_product_id">
                                <input type="hidden" name="id_customization" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"
                                       id="product_customization_id">

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15460081775e0b95a12d73f5_68705606', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16367310875e0b95a12d9339_45377738', 'product_pack', $this->tplIndex);
?>


                                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_price_position'] == 'above-button') {?>
                                    <div class="product_p_price_container">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20195667135e0b95a12df070_42608642', 'product_prices', $this->tplIndex);
?>

                                    </div>
                                <?php }?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3241281335e0b95a12e0799_70212482', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11838688535e0b95a12e1b65_49432742', 'product_discounts', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4474845635e0b95a12e2f27_78759153', 'product_additional_info', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20779022065e0b95a12e42d4_26392197', 'product_refresh', $this->tplIndex);
?>

                            </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_3811660025e0b95a12e53e6_11130410 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_9825553145e0b95a12eb7c0_30956296 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product-small.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true,'elementor'=>true,'richData'=>true), 0, true);
?>
                                        <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_sidebar'} */
class Block_14172148065e0b95a12e8dc8_71765683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                            <section class="product-accessories product-accessories-sidebar block">
                                <p class="block-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span></p>
                                <div id="product-accessories-sidebar" class="block-content products products-grid">
                                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9825553145e0b95a12eb7c0_30956296', 'product_miniature', $this->tplIndex);
?>

                                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                                </div>
                            </section>
                        <?php }?>
                    <?php
}
}
/* {/block 'product_accessories_sidebar'} */
/* {block 'product_miniature'} */
class Block_20916513715e0b95a12f5ed5_93250835 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                                        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/miniatures/product.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('product'=>$_smarty_tpl->tpl_vars['product_accessory']->value,'carousel'=>true,'richData'=>true), 0, true);
?>
                                    <?php
}
}
/* {/block 'product_miniature'} */
/* {block 'product_accessories_footer'} */
class Block_8137431265e0b95a12f3416_95579596 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php if ($_smarty_tpl->tpl_vars['accessories']->value) {?>
                    <section class="product-accessories block block-section">
                        <p class="section-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You might also like','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
                        <div class="block-content">
                            <div class="products slick-products-carousel products-grid slick-default-carousel">
                                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['accessories']->value, 'product_accessory');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product_accessory']->value) {
?>
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20916513715e0b95a12f5ed5_93250835', 'product_miniature', $this->tplIndex);
?>

                                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                            </div>
                        </div>
                    </section>
                <?php }?>
            <?php
}
}
/* {/block 'product_accessories_footer'} */
/* {block 'product_footer'} */
class Block_16914419085e0b95a12f86b6_53805799 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_10746486025e0b95a12f9e65_59874399 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-images-modal.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'product_images_modal'} */
/* {block 'page_footer'} */
class Block_7614709995e0b95a12fb831_76572263 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Footer content -->
                <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_7606177375e0b95a12fb0f6_00811317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7614709995e0b95a12fb831_76572263', 'page_footer', $this->tplIndex);
?>

            </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12284878835e0b95a12abda1_68455664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12284878835e0b95a12abda1_68455664',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_12486500025e0b95a12adb72_81228683',
  ),
  'page_content' => 
  array (
    0 => 'Block_7472809535e0b95a12ae3c4_37213108',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_18398151625e0b95a12aebd5_93267392',
  ),
  'after_cover_thumbnails' => 
  array (
    0 => 'Block_8421743195e0b95a12b06b7_17390734',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_605533075e0b95a12b34c0_34608325',
  ),
  'product_brand_below' => 
  array (
    0 => 'Block_19415521275e0b95a12b3d38_37250639',
    1 => 'Block_2196570355e0b95a12bc8c9_62672309',
  ),
  'page_header' => 
  array (
    0 => 'Block_5524021595e0b95a12ba537_69243751',
  ),
  'page_title' => 
  array (
    0 => 'Block_16720869335e0b95a12bad96_23740397',
  ),
  'hook_display_product_rating' => 
  array (
    0 => 'Block_10357771195e0b95a12ca8c8_26004309',
  ),
  'product_prices' => 
  array (
    0 => 'Block_8073074755e0b95a12ccca4_44396160',
    1 => 'Block_20195667135e0b95a12df070_42608642',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_13825619785e0b95a12ce8e0_69263321',
  ),
  'product_customization' => 
  array (
    0 => 'Block_3021490025e0b95a12d2420_86484974',
  ),
  'product_buy' => 
  array (
    0 => 'Block_13171973985e0b95a12d44a5_28865196',
  ),
  'product_variants' => 
  array (
    0 => 'Block_15460081775e0b95a12d73f5_68705606',
  ),
  'product_pack' => 
  array (
    0 => 'Block_16367310875e0b95a12d9339_45377738',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_16792040685e0b95a12dc017_36957973',
    1 => 'Block_9825553145e0b95a12eb7c0_30956296',
    2 => 'Block_20916513715e0b95a12f5ed5_93250835',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_3241281335e0b95a12e0799_70212482',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_11838688535e0b95a12e1b65_49432742',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_4474845635e0b95a12e2f27_78759153',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_20779022065e0b95a12e42d4_26392197',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_3811660025e0b95a12e53e6_11130410',
  ),
  'product_accessories_sidebar' => 
  array (
    0 => 'Block_14172148065e0b95a12e8dc8_71765683',
  ),
  'product_accessories_footer' => 
  array (
    0 => 'Block_8137431265e0b95a12f3416_95579596',
  ),
  'product_footer' => 
  array (
    0 => 'Block_16914419085e0b95a12f86b6_53805799',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_10746486025e0b95a12f9e65_59874399',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_7606177375e0b95a12fb0f6_00811317',
  ),
  'page_footer' => 
  array (
    0 => 'Block_7614709995e0b95a12fb831_76572263',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <section id="main" itemscope itemtype="https://schema.org/Product">
        <div id="product-preloader"><i class="fa fa-circle-o-notch fa-spin"></i></div>
        <div id="main-product-wrapper">
        <meta itemprop="url" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
">

        <div class="row product-info-row">
            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_img_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-image">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12486500025e0b95a12adb72_81228683', 'page_content_container', $this->tplIndex);
?>

            </div>

            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_content_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-info">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_605533075e0b95a12b34c0_34608325', 'page_header_container', $this->tplIndex);
?>


                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13825619785e0b95a12ce8e0_69263321', 'product_description_short', $this->tplIndex);
?>


                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3021490025e0b95a12d2420_86484974', 'product_customization', $this->tplIndex);
?>

                    <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13171973985e0b95a12d44a5_28865196', 'product_buy', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3811660025e0b95a12e53e6_11130410', 'hook_display_reassurance', $this->tplIndex);
?>


                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar']) {?>
            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar'], ENT_QUOTES, 'UTF-8');?>
 sidebar product-sidebar">

                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'sidebar') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14172148065e0b95a12e8dc8_71765683', 'product_accessories_sidebar', $this->tplIndex);
?>

                <?php }?>

                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayRightColumnProduct'),$_smarty_tpl ) );?>


            </div>
            <?php }?>

        </div>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabh' || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'tabha') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-h.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_tabs'] == 'section') {?>
            <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-tabs-sections.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>

        </div>
        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'footer') {?>
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8137431265e0b95a12f3416_95579596', 'product_accessories_footer', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16914419085e0b95a12f86b6_53805799', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10746486025e0b95a12f9e65_59874399', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7606177375e0b95a12fb0f6_00811317', 'page_footer_container', $this->tplIndex);
?>


    </section>
<?php
}
}
/* {/block 'content'} */
}
