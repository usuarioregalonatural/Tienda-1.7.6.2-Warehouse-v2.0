<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:38:50
  from '/var/www/html/themes/warehouse/templates/catalog/listing/category.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b4f6a8cee38_89285989',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67cd6417f4ade689ee88103bee94cbcc936bcb4f' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/listing/category.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/category-header.tpl' => 1,
    'file:catalog/_partials/category-subcategories.tpl' => 1,
    'file:catalog/_partials/products-bottom.tpl' => 1,
  ),
),false)) {
function content_5e0b4f6a8cee38_89285989 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php $_smarty_tpl->smarty->ext->_capture->open($_smarty_tpl, "justElementor", null, null);
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'isJustElementor','categoryId'=>$_smarty_tpl->tpl_vars['category']->value['id']),$_smarty_tpl ) );
$_smarty_tpl->smarty->ext->_capture->close($_smarty_tpl);?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9396395255e0b4f6a8a5918_88489563', 'head');
?>


<?php if ($_smarty_tpl->smarty->ext->_capture->getBuffer($_smarty_tpl, 'justElementor')) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7922596465e0b4f6a8ab794_20349203', 'left_column');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1509829805e0b4f6a8ac412_63481359', 'right_column');
?>

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_812355895e0b4f6a8ad035_91472837', 'content_wrapper_start');
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5043729275e0b4f6a8add83_79870027', 'content');
?>


<?php } else { ?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20120989645e0b4f6a8af646_36609453', 'product_list_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20744224425e0b4f6a8c81f5_59354055', 'product_list_bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7960782405e0b4f6a8c9b17_32754304', 'product_list_bottom_static');
?>

    <?php }?>


<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'catalog/listing/product-list.tpl');
}
/* {block 'head'} */
class Block_9396395255e0b4f6a8a5918_88489563 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_9396395255e0b4f6a8a5918_88489563',
  ),
);
public $append = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['bread_bg_category']) {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'] != '') {?>
            <style> #wrapper .breadcrumb{  background-image: url('<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
'); }</style>
        <?php }?>
    <?php }
}
}
/* {/block 'head'} */
/* {block 'left_column'} */
class Block_7922596465e0b4f6a8ab794_20349203 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_7922596465e0b4f6a8ab794_20349203',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_1509829805e0b4f6a8ac412_63481359 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_1509829805e0b4f6a8ac412_63481359',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block 'content_wrapper_start'} */
class Block_812355895e0b4f6a8ad035_91472837 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper_start' => 
  array (
    0 => 'Block_812355895e0b4f6a8ad035_91472837',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 <div id="content-wrapper" class="col-12">  <?php
}
}
/* {/block 'content_wrapper_start'} */
/* {block 'content'} */
class Block_5043729275e0b4f6a8add83_79870027 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5043729275e0b4f6a8add83_79870027',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php
}
}
/* {/block 'content'} */
/* {block 'product_list_header'} */
class Block_20120989645e0b4f6a8af646_36609453 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_header' => 
  array (
    0 => 'Block_20120989645e0b4f6a8af646_36609453',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value,'category'=>$_smarty_tpl->tpl_vars['category']->value), 0, false);
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_image'] == 1) {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url']) {?>
            <div class="category-image <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'onimage') {?>
                    <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                        <div class="category-description category-description-image"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                    <?php }?>
                <?php }?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['url'], ENT_QUOTES, 'UTF-8');?>
" alt="<?php if (!empty($_smarty_tpl->tpl_vars['category']->value['image']['legend'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['legend'], ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['name'], ENT_QUOTES, 'UTF-8');
}?>"
                     class="img-fluid" width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['width'], ENT_QUOTES, 'UTF-8');?>
" height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['category']->value['image']['bySize']['category_default']['height'], ENT_QUOTES, 'UTF-8');?>
" >
            </div>
        <?php } else { ?>
            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'onimage') {?>
                <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
                    <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
                <?php }?>
            <?php }?>
        <?php }?>
    <?php }?>


    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'above') {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div class="category-description category-description-top <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_sub_thumbs'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/category-subcategories.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>

<?php
}
}
/* {/block 'product_list_header'} */
/* {block 'product_list_bottom'} */
class Block_20744224425e0b4f6a8c81f5_59354055 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_bottom' => 
  array (
    0 => 'Block_20744224425e0b4f6a8c81f5_59354055',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/products-bottom.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('listing'=>$_smarty_tpl->tpl_vars['listing']->value), 0, false);
}
}
/* {/block 'product_list_bottom'} */
/* {block 'product_list_bottom_static'} */
class Block_7960782405e0b4f6a8c9b17_32754304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_list_bottom_static' => 
  array (
    0 => 'Block_7960782405e0b4f6a8c9b17_32754304',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_desc'] == 'below') {?>
        <?php if ($_smarty_tpl->tpl_vars['category']->value['description']) {?>
            <div class="category-description category-description-bottom <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['cat_hide_mobile']) {?> hidden-sm-down<?php }?>"><hr /><?php echo $_smarty_tpl->tpl_vars['category']->value['description'];?>
</div>
        <?php }?>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayCategoryElementor'),$_smarty_tpl ) );?>

    <?php }
}
}
/* {/block 'product_list_bottom_static'} */
}
