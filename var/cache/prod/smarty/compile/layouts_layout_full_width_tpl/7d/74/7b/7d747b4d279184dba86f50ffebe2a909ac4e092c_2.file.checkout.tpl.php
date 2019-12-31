<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:45:53
  from '/var/www/html/themes/warehouse/templates/checkout/checkout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b51115abca1_16414341',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d747b4d279184dba86f50ffebe2a909ac4e092c' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/checkout/checkout.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:checkout/_partials/cart-summary.tpl' => 1,
  ),
),false)) {
function content_5e0b51115abca1_16414341 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19120848785e0b51115a3e48_99031748', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'cart_summary'} */
class Block_552260595e0b51115a65f1_97801449 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['render'][0], array( array('file'=>'checkout/checkout-process.tpl','ui'=>$_smarty_tpl->tpl_vars['checkout_process']->value),$_smarty_tpl ) );?>

        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'cart_summary'} */
class Block_760765645e0b51115a8c86_67838818 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php $_smarty_tpl->_subTemplateRender('file:checkout/_partials/cart-summary.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('cart'=>$_smarty_tpl->tpl_vars['cart']->value), 0, false);
?>
        <?php
}
}
/* {/block 'cart_summary'} */
/* {block 'content'} */
class Block_19120848785e0b51115a3e48_99031748 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19120848785e0b51115a3e48_99031748',
  ),
  'cart_summary' => 
  array (
    0 => 'Block_552260595e0b51115a65f1_97801449',
    1 => 'Block_760765645e0b51115a8c86_67838818',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <section id="main">
    <h1 class="h1 page-title"><span><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Checkout','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</span></h1>
    <div class="row">
      <div class="col-md-8">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_552260595e0b51115a65f1_97801449', 'cart_summary', $this->tplIndex);
?>

      </div>
      <div class="col-md-4 cart-grid-right">

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_760765645e0b51115a8c86_67838818', 'cart_summary', $this->tplIndex);
?>


        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayReassurance'),$_smarty_tpl ) );?>

      </div>
    </div>
  </section>
<?php
}
}
/* {/block 'content'} */
}
