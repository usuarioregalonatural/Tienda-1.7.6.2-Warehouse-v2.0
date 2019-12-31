<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:58:01
  from '/var/www/html/themes/warehouse/templates/catalog/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b45d9256666_56337201',
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
function content_5e0b45d9256666_56337201 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4453403295e0b45d91e5fa4_51530800', 'head_seo');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13310286675e0b45d91e7dc2_92247478', 'head_og_tags');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12350500695e0b45d91ef9a6_56835880', 'head');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12418296445e0b45d91ffba7_88567215', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'head_seo'} */
class Block_4453403295e0b45d91e5fa4_51530800 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_4453403295e0b45d91e5fa4_51530800',
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
class Block_13310286675e0b45d91e7dc2_92247478 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_13310286675e0b45d91e7dc2_92247478',
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
class Block_12350500695e0b45d91ef9a6_56835880 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_12350500695e0b45d91ef9a6_56835880',
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
class Block_4007909615e0b45d9202d82_37032254 extends Smarty_Internal_Block
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
class Block_3764319405e0b45d92049c7_28872983 extends Smarty_Internal_Block
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
class Block_12386112775e0b45d92024d1_83812896 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4007909615e0b45d9202d82_37032254', 'product_cover_thumbnails', $this->tplIndex);
?>


                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3764319405e0b45d92049c7_28872983', 'after_cover_thumbnails', $this->tplIndex);
?>


                        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8265005635e0b45d9201bd0_72600683 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <section class="page-content" id="content">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12386112775e0b45d92024d1_83812896', 'page_content', $this->tplIndex);
?>

                    </section>
                <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'product_brand_below'} */
class Block_11347221065e0b45d9208499_04905156 extends Smarty_Internal_Block
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
class Block_12129083895e0b45d920ffd0_48091505 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'page_title'} */
/* {block 'page_header'} */
class Block_19066550155e0b45d920f759_38135940 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <h1 class="h1 page-title" itemprop="name"><span><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12129083895e0b45d920ffd0_48091505', 'page_title', $this->tplIndex);
?>
</span></h1>
                    <?php
}
}
/* {/block 'page_header'} */
/* {block 'product_brand_below'} */
class Block_15674351995e0b45d9211b14_13395991 extends Smarty_Internal_Block
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
class Block_15417284225e0b45d921ff75_66769754 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductRating','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_product_rating'} */
/* {block 'product_prices'} */
class Block_2783748395e0b45d9222617_61176786 extends Smarty_Internal_Block
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
class Block_10650925795e0b45d9207b72_29234689 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div class="product_header_container clearfix">

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11347221065e0b45d9208499_04905156', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19066550155e0b45d920f759_38135940', 'page_header', $this->tplIndex);
?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15674351995e0b45d9211b14_13395991', 'product_brand_below', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15417284225e0b45d921ff75_66769754', 'hook_display_product_rating', $this->tplIndex);
?>


                        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_price_position'] == 'below-title') {?>
                            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2783748395e0b45d9222617_61176786', 'product_prices', $this->tplIndex);
?>

                        <?php }?>
                    </div>
                <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'product_description_short'} */
class Block_4165004995e0b45d9224488_47171137 extends Smarty_Internal_Block
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
class Block_19887867375e0b45d9228413_92609891 extends Smarty_Internal_Block
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
class Block_9267574195e0b45d922db79_59517304 extends Smarty_Internal_Block
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
class Block_8473734125e0b45d92333c1_63345436 extends Smarty_Internal_Block
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
class Block_17281540925e0b45d922fc23_05943863 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8473734125e0b45d92333c1_63345436', 'product_miniature', $this->tplIndex);
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
class Block_12756896515e0b45d9236933_03147138 extends Smarty_Internal_Block
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
class Block_19550630865e0b45d9238228_54872176 extends Smarty_Internal_Block
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
class Block_5494669005e0b45d9239781_68666795 extends Smarty_Internal_Block
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
class Block_16149569805e0b45d923b746_81004925 extends Smarty_Internal_Block
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
class Block_21262860265e0b45d923cb40_92542780 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'product_refresh'} */
/* {block 'product_buy'} */
class Block_16254157505e0b45d922ace6_19372480 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9267574195e0b45d922db79_59517304', 'product_variants', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17281540925e0b45d922fc23_05943863', 'product_pack', $this->tplIndex);
?>


                                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_price_position'] == 'above-button') {?>
                                    <div class="product_p_price_container">
                                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12756896515e0b45d9236933_03147138', 'product_prices', $this->tplIndex);
?>

                                    </div>
                                <?php }?>

                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19550630865e0b45d9238228_54872176', 'product_add_to_cart', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5494669005e0b45d9239781_68666795', 'product_discounts', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16149569805e0b45d923b746_81004925', 'product_additional_info', $this->tplIndex);
?>


                                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21262860265e0b45d923cb40_92542780', 'product_refresh', $this->tplIndex);
?>

                            </form>
                        <?php
}
}
/* {/block 'product_buy'} */
/* {block 'hook_display_reassurance'} */
class Block_13050349325e0b45d923dc94_03976609 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

                        <?php
}
}
/* {/block 'hook_display_reassurance'} */
/* {block 'product_miniature'} */
class Block_2681900845e0b45d9243cc7_54090613 extends Smarty_Internal_Block
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
class Block_1050139065e0b45d9241281_82485057 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2681900845e0b45d9243cc7_54090613', 'product_miniature', $this->tplIndex);
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
class Block_14206430495e0b45d924e760_34112410 extends Smarty_Internal_Block
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
class Block_17597036695e0b45d924c196_26645618 extends Smarty_Internal_Block
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14206430495e0b45d924e760_34112410', 'product_miniature', $this->tplIndex);
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
class Block_15686257825e0b45d92511b9_54103285 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterProduct','product'=>$_smarty_tpl->tpl_vars['product']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'product_footer'} */
/* {block 'product_images_modal'} */
class Block_4313857185e0b45d9253078_52405841 extends Smarty_Internal_Block
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
class Block_13794600445e0b45d9254db5_44779628 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <!-- Footer content -->
                <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_18827329145e0b45d92545e0_52343041 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <footer class="page-footer">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13794600445e0b45d9254db5_44779628', 'page_footer', $this->tplIndex);
?>

            </footer>
        <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_12418296445e0b45d91ffba7_88567215 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_12418296445e0b45d91ffba7_88567215',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8265005635e0b45d9201bd0_72600683',
  ),
  'page_content' => 
  array (
    0 => 'Block_12386112775e0b45d92024d1_83812896',
  ),
  'product_cover_thumbnails' => 
  array (
    0 => 'Block_4007909615e0b45d9202d82_37032254',
  ),
  'after_cover_thumbnails' => 
  array (
    0 => 'Block_3764319405e0b45d92049c7_28872983',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_10650925795e0b45d9207b72_29234689',
  ),
  'product_brand_below' => 
  array (
    0 => 'Block_11347221065e0b45d9208499_04905156',
    1 => 'Block_15674351995e0b45d9211b14_13395991',
  ),
  'page_header' => 
  array (
    0 => 'Block_19066550155e0b45d920f759_38135940',
  ),
  'page_title' => 
  array (
    0 => 'Block_12129083895e0b45d920ffd0_48091505',
  ),
  'hook_display_product_rating' => 
  array (
    0 => 'Block_15417284225e0b45d921ff75_66769754',
  ),
  'product_prices' => 
  array (
    0 => 'Block_2783748395e0b45d9222617_61176786',
    1 => 'Block_12756896515e0b45d9236933_03147138',
  ),
  'product_description_short' => 
  array (
    0 => 'Block_4165004995e0b45d9224488_47171137',
  ),
  'product_customization' => 
  array (
    0 => 'Block_19887867375e0b45d9228413_92609891',
  ),
  'product_buy' => 
  array (
    0 => 'Block_16254157505e0b45d922ace6_19372480',
  ),
  'product_variants' => 
  array (
    0 => 'Block_9267574195e0b45d922db79_59517304',
  ),
  'product_pack' => 
  array (
    0 => 'Block_17281540925e0b45d922fc23_05943863',
  ),
  'product_miniature' => 
  array (
    0 => 'Block_8473734125e0b45d92333c1_63345436',
    1 => 'Block_2681900845e0b45d9243cc7_54090613',
    2 => 'Block_14206430495e0b45d924e760_34112410',
  ),
  'product_add_to_cart' => 
  array (
    0 => 'Block_19550630865e0b45d9238228_54872176',
  ),
  'product_discounts' => 
  array (
    0 => 'Block_5494669005e0b45d9239781_68666795',
  ),
  'product_additional_info' => 
  array (
    0 => 'Block_16149569805e0b45d923b746_81004925',
  ),
  'product_refresh' => 
  array (
    0 => 'Block_21262860265e0b45d923cb40_92542780',
  ),
  'hook_display_reassurance' => 
  array (
    0 => 'Block_13050349325e0b45d923dc94_03976609',
  ),
  'product_accessories_sidebar' => 
  array (
    0 => 'Block_1050139065e0b45d9241281_82485057',
  ),
  'product_accessories_footer' => 
  array (
    0 => 'Block_17597036695e0b45d924c196_26645618',
  ),
  'product_footer' => 
  array (
    0 => 'Block_15686257825e0b45d92511b9_54103285',
  ),
  'product_images_modal' => 
  array (
    0 => 'Block_4313857185e0b45d9253078_52405841',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_18827329145e0b45d92545e0_52343041',
  ),
  'page_footer' => 
  array (
    0 => 'Block_13794600445e0b45d9254db5_44779628',
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8265005635e0b45d9201bd0_72600683', 'page_content_container', $this->tplIndex);
?>

            </div>

            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_content_width'], ENT_QUOTES, 'UTF-8');?>
 col-product-info">
                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10650925795e0b45d9207b72_29234689', 'page_header_container', $this->tplIndex);
?>


                <div class="product-information">
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4165004995e0b45d9224488_47171137', 'product_description_short', $this->tplIndex);
?>


                    <?php if ($_smarty_tpl->tpl_vars['product']->value['is_customizable'] && count($_smarty_tpl->tpl_vars['product']->value['customizations']['fields'])) {?>
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19887867375e0b45d9228413_92609891', 'product_customization', $this->tplIndex);
?>

                    <?php }?>

                    <div class="product-actions">
                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16254157505e0b45d922ace6_19372480', 'product_buy', $this->tplIndex);
?>


                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13050349325e0b45d923dc94_03976609', 'hook_display_reassurance', $this->tplIndex);
?>


                    </div>
                </div>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar']) {?>
            <div class="col-md-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_sidebar'], ENT_QUOTES, 'UTF-8');?>
 sidebar product-sidebar">

                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_accesories'] == 'sidebar') {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1050139065e0b45d9241281_82485057', 'product_accessories_sidebar', $this->tplIndex);
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
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17597036695e0b45d924c196_26645618', 'product_accessories_footer', $this->tplIndex);
?>

        <?php }?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15686257825e0b45d92511b9_54103285', 'product_footer', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4313857185e0b45d9253078_52405841', 'product_images_modal', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18827329145e0b45d92545e0_52343041', 'page_footer_container', $this->tplIndex);
?>


    </section>
<?php
}
}
/* {/block 'content'} */
}
