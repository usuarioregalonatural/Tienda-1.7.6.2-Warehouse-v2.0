<?php
/* Smarty version 3.1.33, created on 2020-01-02 12:00:35
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dcd5360b501_65508680',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1259f51d0a9d9dd876fc6351687ed8caa8713cd3' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/miniatures/_partials/product-miniature-thumb.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0dcd5360b501_65508680 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

    <div class="thumbnail-container">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">

            <?php if ($_smarty_tpl->tpl_vars['product']->value['cover']) {?>
                <img
                        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_lazyload']) {?>
                            <?php if (isset($_smarty_tpl->tpl_vars['carousel']->value) && $_smarty_tpl->tpl_vars['carousel']->value) {?>
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                            <?php } else { ?>
                                data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/blank.png"
                            <?php }?>
                        <?php } else { ?>
                            src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        <?php }?>
                        alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                        data-full-size-image-url="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['large']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                        height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                        class="img-fluid <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_lazyload']) {
if (isset($_smarty_tpl->tpl_vars['carousel']->value) && $_smarty_tpl->tpl_vars['carousel']->value) {?> <?php } else { ?>js-lazy-product-image<?php }
}?> product-thumbnail-first"
                >
            <?php } else { ?>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['canonical_url'], ENT_QUOTES, 'UTF-8');?>
" class="thumbnail product-thumbnail">
                    <img class="img-fluid product-thumbnail-first" src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                        alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?>"
                         width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                         height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['no_picture_image']['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
">
            <?php }?>

            <?php if (!isset($_smarty_tpl->tpl_vars['overlay']->value)) {?>
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pl_rollover']) {?>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['images'], 'image');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['image']->value) {
?>
                        <?php if (!$_smarty_tpl->tpl_vars['image']->value['cover']) {?>
                            <img
                                src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['theme_assets'], ENT_QUOTES, 'UTF-8');?>
img/blank.png"
                                data-src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['width'], ENT_QUOTES, 'UTF-8');?>
"
                                height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['image']->value['bySize']['home_default']['height'], ENT_QUOTES, 'UTF-8');?>
"
                                alt="<?php if (!empty($_smarty_tpl->tpl_vars['product']->value['cover']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'truncate' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['name'],30,'...' )), ENT_QUOTES, 'UTF-8');
}?> 2"
                                class="img-fluid js-lazy-product-image product-thumbnail-second"
                            >
                            <?php break 1;?>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php }?>
            <?php }?>
        </a>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20482650655e0dcd535f21c2_29275340', 'product_flags');
?>


        <?php if (!isset($_smarty_tpl->tpl_vars['overlay']->value) && !isset($_smarty_tpl->tpl_vars['list']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13172160375e0dcd535f6ce5_63018604', 'product_list_functional_buttons');
?>

        <?php }?>

        <?php if (!isset($_smarty_tpl->tpl_vars['list']->value)) {?>
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1378310215e0dcd535faf42_56854416', 'product_availability');
?>

        <?php }?>

    </div>


<?php }
/* {block 'product_flags'} */
class Block_20482650655e0dcd535f21c2_29275340 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_flags' => 
  array (
    0 => 'Block_20482650655e0dcd535f21c2_29275340',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <ul class="product-flags">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['flags'], 'flag');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['flag']->value) {
?>
                    <li class="product-flag <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['type'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['flag']->value['label'], ENT_QUOTES, 'UTF-8');?>
</li>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        <?php
}
}
/* {/block 'product_flags'} */
/* {block 'quick_view'} */
class Block_10763754095e0dcd535f7f98_36790183 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <a class="js-quick-view-iqit" href="#" data-link-action="quickview" data-toggle="tooltip"
                           title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Quick view','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                            <i class="fa fa-eye" aria-hidden="true"></i></a>
                    <?php
}
}
/* {/block 'quick_view'} */
/* {block 'product_list_functional_buttons'} */
class Block_13172160375e0dcd535f6ce5_63018604 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_functional_buttons' => 
  array (
    0 => 'Block_13172160375e0dcd535f6ce5_63018604',
  ),
  'quick_view' => 
  array (
    0 => 'Block_10763754095e0dcd535f7f98_36790183',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-functional-buttons product-functional-buttons-bottom">
                <div class="product-functional-buttons-links">
                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductListFunctionalButtons','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10763754095e0dcd535f7f98_36790183', 'quick_view', $this->tplIndex);
?>

                </div>
            </div>
        <?php
}
}
/* {/block 'product_list_functional_buttons'} */
/* {block 'product_availability'} */
class Block_1378310215e0dcd535faf42_56854416 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability' => 
  array (
    0 => 'Block_1378310215e0dcd535faf42_56854416',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <div class="product-availability d-block">
                <?php if ($_smarty_tpl->tpl_vars['product']->value['show_availability'] && $_smarty_tpl->tpl_vars['product']->value['availability_message']) {?>
                    <span
                            class="badge <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?> <?php if ($_smarty_tpl->tpl_vars['product']->value['quantity'] <= 0 && $_smarty_tpl->tpl_vars['product']->value['allow_oosp']) {?> badge-danger product-unavailable <?php } else { ?>badge-success product-available<?php }
} elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>badge-warning d-none product-last-items<?php } else { ?>badge-danger product-unavailable<?php }?> mt-2">
                  <?php if ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'available') {?>
                      <i class="fa fa-check rtl-no-flip" aria-hidden="true"></i>
                                                     <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

                  <?php } elseif ($_smarty_tpl->tpl_vars['product']->value['availability'] == 'last_remaining_items') {?>
                      <i class="fa fa-exclamation" aria-hidden="true"></i>
                                                     <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

                  <?php } else { ?>
                      <i class="fa fa-ban" aria-hidden="true"></i>
                              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_message'], ENT_QUOTES, 'UTF-8');?>

                      <?php if (isset($_smarty_tpl->tpl_vars['product']->value['available_date']) && $_smarty_tpl->tpl_vars['product']->value['available_date'] != '0000-00-00') {?>
                      <?php if (strtotime($_smarty_tpl->tpl_vars['product']->value['available_date']) > time()) {?><span
                              class="available-date"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'until','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['available_date'], ENT_QUOTES, 'UTF-8');?>
</span><?php }?>
                  <?php }?>
                  <?php }?>
                </span>
                <?php }?>

            </div>
        <?php
}
}
/* {/block 'product_availability'} */
}
