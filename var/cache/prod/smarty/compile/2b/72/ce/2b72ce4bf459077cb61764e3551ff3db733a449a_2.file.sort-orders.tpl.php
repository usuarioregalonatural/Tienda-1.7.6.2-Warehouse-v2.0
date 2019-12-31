<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:57:59
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/sort-orders.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b45d73cc412_69841344',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2b72ce4bf459077cb61764e3551ff3db733a449a' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/sort-orders.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b45d73cc412_69841344 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'/var/www/html/vendor/smarty/smarty/libs/plugins/modifier.regex_replace.php','function'=>'smarty_modifier_regex_replace',),));
?>

<div class="products-sort-nb-dropdown products-sort-order dropdown">
    <a class="select-title expand-more form-control" rel="nofollow" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
       <span class="select-title-name"><?php if (isset($_smarty_tpl->tpl_vars['listing']->value['sort_selected'])) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['listing']->value['sort_selected'], ENT_QUOTES, 'UTF-8');
} else {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Select','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );
}?></span>
        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </a>
    <div class="dropdown-menu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['listing']->value['sort_orders'], 'sort_order');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['sort_order']->value) {
?>
            <?php if ($_smarty_tpl->tpl_vars['sort_order']->value['current']) {?>
                <?php $_smarty_tpl->_assignInScope('currentSortUrl', smarty_modifier_regex_replace($_smarty_tpl->tpl_vars['sort_order']->value['url'],"/&resultsPerPage=\d+"."$"."/",''));?>
            <?php }?>
            <a
                    rel="nofollow"
                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                    class="select-list dropdown-item <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('current'=>$_smarty_tpl->tpl_vars['sort_order']->value['current'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
            >
                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['sort_order']->value['label'], ENT_QUOTES, 'UTF-8');?>

            </a>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div>

<?php if (isset($_smarty_tpl->tpl_vars['currentSortUrl']->value)) {?>
<div class="products-sort-nb-dropdown products-nb-per-page dropdown">
    <a class="select-title expand-more form-control" rel="nofollow" data-toggle="dropdown" data-display="static" aria-haspopup="true" aria-expanded="false">
        <?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['listing']->value['products']), ENT_QUOTES, 'UTF-8');?>

        <i class="fa fa-angle-down" aria-hidden="true"></i>
    </a>

    <div class="dropdown-menu">
        <a
                rel="nofollow"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl']->value, ENT_QUOTES, 'UTF-8');?>
&resultsPerPage=12"
                class="select-list dropdown-item <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
        >
            12
        </a>
        <a
                rel="nofollow"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl']->value, ENT_QUOTES, 'UTF-8');?>
&resultsPerPage=24"
                class="select-list dropdown-item <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
        >
            24
        </a>
        <a
                rel="nofollow"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl']->value, ENT_QUOTES, 'UTF-8');?>
&resultsPerPage=36"
                class="select-list dropdown-item <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
        >
            36
        </a>
        <a
                rel="nofollow"
                href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['currentSortUrl']->value, ENT_QUOTES, 'UTF-8');?>
&resultsPerPage=9999999"
                class="select-list dropdown-item <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
        >
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Show all','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>

        </a>
     </div>
</div>
<?php }
}
}
