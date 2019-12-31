<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:06:06
  from '/var/www/html/admin786icvj8i/themes/default/template/helpers/tree/tree_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b47be0440b9_48056213',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1b8a09905fff64e3d236dc8d1e7ee85e8483d2f' => 
    array (
      0 => '/var/www/html/admin786icvj8i/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1577795553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b47be0440b9_48056213 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl ) );
}?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {
echo $_smarty_tpl->tpl_vars['toolbar']->value;
}?>
</div>
<?php }
}
