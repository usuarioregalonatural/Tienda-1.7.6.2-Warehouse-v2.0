<?php
/* Smarty version 3.1.33, created on 2020-01-02 19:00:16
  from 'module:iqitsearchviewstemplatesh' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0e2fb0aeb956_63944762',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd99b947421dcff226f28b1d6cb674c91f17399db' => 
    array (
      0 => 'module:iqitsearchviewstemplatesh',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:iqitsearch/views/templates/hook/search-bar.tpl' => 2,
  ),
),false)) {
function content_5e0e2fb0aeb956_63944762 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="header-search-btn" class="col col-auto header-btn-w header-search-btn-w">
    <a data-toggle="dropdown" id="header-search-btn-drop"  class="header-btn header-search-btn" data-display="static">
        <i class="fa fa-search fa-fw icon" aria-hidden="true"></i>
        <span class="title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Search','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</span>
    </a>
    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['h_search_type']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_search_type'] == 'full') {?>
    <div class="dropdown-menu-custom  dropdown-menu">
        <div class="dropdown-content modal-backdrop fullscreen-search">
            <?php $_smarty_tpl->_subTemplateRender('module:iqitsearch/views/templates/hook/search-bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <div id="fullscreen-search-backdrop"></div>
        </div>
    </div>
    <?php } else { ?>
        <div class="dropdown-content dropdown-menu dropdown-search">
            <?php $_smarty_tpl->_subTemplateRender('module:iqitsearch/views/templates/hook/search-bar.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        </div>
    <?php }?>
</div>
<?php }
}
