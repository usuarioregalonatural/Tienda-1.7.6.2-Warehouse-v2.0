<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:38:50
  from '/var/www/html/themes/warehouse/modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b4f6a8985a5_75599457',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b6c0fe8fe732b1a347dff9f11a0931dd84516e47' => 
    array (
      0 => '/var/www/html/themes/warehouse/modules/ps_facetedsearch/views/templates/front/catalog/active-filters.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b4f6a8985a5_75599457 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<div id="js-active-search-filters" class="<?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>active_filters<?php } else { ?>hide<?php }?>">
    <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value)) {?>
        <div id="active-search-filters">
            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15691148905e0b4f6a88bbf5_68874437', 'active_filters_title');
?>

            <ul class="filter-blocks">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['activeFilters']->value, 'filter');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['filter']->value) {
?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3198479015e0b4f6a890641_85008218', 'active_filters_item');
?>

                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                <?php if (count($_smarty_tpl->tpl_vars['activeFilters']->value) > 1) {?>
                    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1283605545e0b4f6a896388_45533645', 'facets_clearall_button');
?>

                <?php }?>
            </ul>
        </div>
    <?php }?>
</div>
<?php }
/* {block 'active_filters_title'} */
class Block_15691148905e0b4f6a88bbf5_68874437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_title' => 
  array (
    0 => 'Block_15691148905e0b4f6a88bbf5_68874437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <span class="active-filter-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Active filters','d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>
            <?php
}
}
/* {/block 'active_filters_title'} */
/* {block 'active_filters_item'} */
class Block_3198479015e0b4f6a890641_85008218 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'active_filters_item' => 
  array (
    0 => 'Block_3198479015e0b4f6a890641_85008218',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li class="filter-block">
                            <a class="js-search-link btn btn-secondary btn-sm" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['nextEncodedFacetsURL'], ENT_QUOTES, 'UTF-8');?>
">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%1$s: ','d'=>'Shop.Theme.Catalog','sprintf'=>array($_smarty_tpl->tpl_vars['filter']->value['facetLabel'])),$_smarty_tpl ) );?>

                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filter']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    <?php
}
}
/* {/block 'active_filters_item'} */
/* {block 'facets_clearall_button'} */
class Block_1283605545e0b4f6a896388_45533645 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'facets_clearall_button' => 
  array (
    0 => 'Block_1283605545e0b4f6a896388_45533645',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <li class="filter-block filter-block-all">
                            <a class="js-search-link btn btn-secondary btn-sm" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['clear_all_link']->value, ENT_QUOTES, 'UTF-8');?>
">
                                <i class="fa fa-times" aria-hidden="true"></i>
                                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Clear all','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

                            </a>
                        </li>
                    <?php
}
}
/* {/block 'facets_clearall_button'} */
}
