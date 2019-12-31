<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:06:06
  from '/var/www/html/admin786icvj8i/themes/default/template/helpers/tree/tree_node_item_checkbox.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b47be050e88_50388157',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '719c5c9aeb1c13a473a6c255e9de8b0f5707e91e' => 
    array (
      0 => '/var/www/html/admin786icvj8i/themes/default/template/helpers/tree/tree_node_item_checkbox.tpl',
      1 => 1577795553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b47be050e88_50388157 (Smarty_Internal_Template $_smarty_tpl) {
?><li class="tree-item<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-disable<?php }?>">
	<span class="tree-item-name<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> tree-item-name-disable<?php }?>">
		<input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input_name']->value;?>
[]" value="<?php echo $_smarty_tpl->tpl_vars['node']->value['id_category'];?>
"<?php if (isset($_smarty_tpl->tpl_vars['node']->value['disabled']) && $_smarty_tpl->tpl_vars['node']->value['disabled'] == true) {?> disabled="disabled"<?php }?> />
		<i class="tree-dot"></i>
		<label class="tree-toggler"><?php echo $_smarty_tpl->tpl_vars['node']->value['name'];?>
</label>
	</span>
</li>
<?php }
}
