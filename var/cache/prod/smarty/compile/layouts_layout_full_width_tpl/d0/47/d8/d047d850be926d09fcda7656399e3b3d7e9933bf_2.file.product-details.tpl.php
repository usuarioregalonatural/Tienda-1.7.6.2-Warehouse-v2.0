<?php
/* Smarty version 3.1.33, created on 2019-12-31 19:50:36
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/product-details.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b987c847866_92108608',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd047d850be926d09fcda7656399e3b3d7e9933bf' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/product-details.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b987c847866_92108608 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<div id="product-details" data-product="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['product']->value['embedded_attributes'] )), ENT_QUOTES, 'UTF-8');?>
" class="clearfix">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11024665815e0b987c82e5e4_87206518', 'product_features');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_806014885e0b987c832069_57950298', 'product_brand');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10616003305e0b987c838799_36862914', 'product_reference');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8259935355e0b987c83bc00_80713397', 'product_quantities');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3239114705e0b987c83eeb1_89379780', 'product_condition');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7209525465e0b987c841756_33222807', 'product_specific_references');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10173003585e0b987c844395_28019781', 'product_availability_date');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21169735485e0b987c846a91_95079964', 'product_out_of_stock');
?>

</div>



<?php }
/* {block 'product_features'} */
class Block_11024665815e0b987c82e5e4_87206518 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_features' => 
  array (
    0 => 'Block_11024665815e0b987c82e5e4_87206518',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['grouped_features']) {?>
        <section class="product-features">
            <dl class="data-sheet">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['grouped_features'], 'feature');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->value) {
?>
                    <dt class="name"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
</dt>
                    <dd class="value"><?php echo nl2br(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['feature']->value['value'],'htmlall' )));?>
</dd>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </dl>
        </section>
    <?php }
}
}
/* {/block 'product_features'} */
/* {block 'product_brand'} */
class Block_806014885e0b987c832069_57950298 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_brand' => 
  array (
    0 => 'Block_806014885e0b987c832069_57950298',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_man_logo'] == 'tab') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['product_manufacturer']->value->id)) {?>
        <meta itemprop="brand" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
">
        <div class="product-manufacturer <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?> float-right<?php }?>">
            <?php if (isset($_smarty_tpl->tpl_vars['manufacturer_image_url']->value)) {?>
                <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
">
                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['manufacturer_image_url']->value, ENT_QUOTES, 'UTF-8');?>
" class="img-fluid  manufacturer-logo" alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
"/>
                </a>
            <?php } else { ?>
                <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Brand','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
                <span>
            <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_brand_url']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product_manufacturer']->value->name, ENT_QUOTES, 'UTF-8');?>
</a>
          </span>
            <?php }?>
        </div>
    <?php }
}
}
}
/* {/block 'product_brand'} */
/* {block 'product_reference'} */
class Block_10616003305e0b987c838799_36862914 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_reference' => 
  array (
    0 => 'Block_10616003305e0b987c838799_36862914',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_reference'] == 'details') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['product']->value['reference_to_display']) && $_smarty_tpl->tpl_vars['product']->value['reference_to_display'] != '') {?>
        <div class="product-reference">
            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Reference','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
            <span itemprop="sku"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['reference_to_display'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php }?>
    <?php }
}
}
/* {/block 'product_reference'} */
/* {block 'product_quantities'} */
class Block_8259935355e0b987c83bc00_80713397 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_quantities' => 
  array (
    0 => 'Block_8259935355e0b987c83bc00_80713397',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['show_quantities']) {?>
        <div class="product-quantities">
            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'In stock','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</label>
            <span data-stock="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
" data-allow-oosp="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['allow_oosp'], ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity_label'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php }
}
}
/* {/block 'product_quantities'} */
/* {block 'product_condition'} */
class Block_3239114705e0b987c83eeb1_89379780 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_condition' => 
  array (
    0 => 'Block_3239114705e0b987c83eeb1_89379780',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['condition']) {?>
        <div class="product-condition">
            <label class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Condition','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
            <link itemprop="itemCondition" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['schema_url'], ENT_QUOTES, 'UTF-8');?>
"/>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['condition']['label'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php }
}
}
/* {/block 'product_condition'} */
/* {block 'product_specific_references'} */
class Block_7209525465e0b987c841756_33222807 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_specific_references' => 
  array (
    0 => 'Block_7209525465e0b987c841756_33222807',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if (!empty($_smarty_tpl->tpl_vars['product']->value['specific_references'])) {?>
        <div class="specific-references">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['specific_references'], 'reference', false, 'key');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['reference']->value) {
?>
                <div>
                    <label class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['key']->value, ENT_QUOTES, 'UTF-8');?>
</label>
                    <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['reference']->value, ENT_QUOTES, 'UTF-8');?>
</span>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    <?php }
}
}
/* {/block 'product_specific_references'} */
/* {block 'product_availability_date'} */
class Block_10173003585e0b987c844395_28019781 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_availability_date' => 
  array (
    0 => 'Block_10173003585e0b987c844395_28019781',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['product']->value['availability_date']) {?>
        <div class="product-availability-date">
            <label><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Availability date:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
 </label>
            <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['availability_date'], ENT_QUOTES, 'UTF-8');?>
</span>
        </div>
    <?php }
}
}
/* {/block 'product_availability_date'} */
/* {block 'product_out_of_stock'} */
class Block_21169735485e0b987c846a91_95079964 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_out_of_stock' => 
  array (
    0 => 'Block_21169735485e0b987c846a91_95079964',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div class="product-out-of-stock">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'actionProductOutOfStock','product'=>$_smarty_tpl->tpl_vars['product']->value),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'product_out_of_stock'} */
}
