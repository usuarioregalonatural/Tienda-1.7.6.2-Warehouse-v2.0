<?php
/* Smarty version 3.1.33, created on 2020-01-04 12:31:43
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e10779fc69985_76955783',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd4e1571b6b210795247564db06deb17061778b51' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1577795556,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e10779fc69985_76955783 (Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['cart']->value['products_count'], ENT_QUOTES, 'UTF-8');?>

<?php }
}
