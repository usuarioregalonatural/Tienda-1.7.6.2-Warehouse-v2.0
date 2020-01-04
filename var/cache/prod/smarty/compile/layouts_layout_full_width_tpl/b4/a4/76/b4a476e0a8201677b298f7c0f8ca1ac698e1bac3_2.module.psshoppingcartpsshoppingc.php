<?php
/* Smarty version 3.1.33, created on 2020-01-04 12:31:43
  from 'module:psshoppingcartpsshoppingc' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e10779fb59882_52171904',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4a476e0a8201677b298f7c0f8ca1ac698e1bac3' => 
    array (
      0 => 'module:psshoppingcartpsshoppingc',
      1 => 1577795556,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
    'module:ps_shoppingcart/ps_shoppingcart.tpl' => 1,
  ),
),false)) {
function content_5e10779fb59882_52171904 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ps-shoppingcart-wrapper" class="col col-auto">
    <div id="ps-shoppingcart"
         class="header-btn-w header-cart-btn-w ps-shoppingcart <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['cart_style'] == "floating") {?>dropdown<?php } else { ?>side-cart<?php }?>">
        <?php $_smarty_tpl->_subTemplateRender('module:ps_shoppingcart/ps_shoppingcart.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    </div>
</div>
<?php }
}
