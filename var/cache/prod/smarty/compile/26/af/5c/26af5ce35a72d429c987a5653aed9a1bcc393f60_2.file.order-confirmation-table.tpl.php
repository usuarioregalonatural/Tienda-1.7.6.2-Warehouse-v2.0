<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:46:31
  from '/var/www/html/themes/warehouse/templates/checkout/_partials/order-confirmation-table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b513771ace5_87270746',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '26af5ce35a72d429c987a5653aed9a1bcc393f60' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/checkout/_partials/order-confirmation-table.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b513771ace5_87270746 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1318928745e0b51376ed688_46558745', 'order_items_table_head');
?>


  <div class="order-confirmation-table">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7139861075e0b51376eeea8_88362980', 'order_confirmation_table');
?>


  </div>
</div>
<?php }
/* {block 'order_items_table_head'} */
class Block_1318928745e0b51376ed688_46558745 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_items_table_head' => 
  array (
    0 => 'Block_1318928745e0b51376ed688_46558745',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="order-items" class="col-md-8">
    <h3 class="card-title h3"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Order items','d'=>'Shop.Theme.Checkout'),$_smarty_tpl ) );?>
</h3>
<?php
}
}
/* {/block 'order_items_table_head'} */
/* {block 'order_confirmation_table'} */
class Block_7139861075e0b51376eeea8_88362980 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'order_confirmation_table' => 
  array (
    0 => 'Block_7139861075e0b51376eeea8_88362980',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
?>
        <div class="order-line row small-gutters align-items-center">
          <div class="col-sm-2 col-3">
            <span class="image">
              <?php if ($_smarty_tpl->tpl_vars['add_product_link']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php }?>
                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['cover']['medium']['url'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" />
              <?php if ($_smarty_tpl->tpl_vars['add_product_link']->value) {?></a><?php }?>
            </span>
          </div>
          <div class="col-sm-4 col-9 details">
            <?php if ($_smarty_tpl->tpl_vars['add_product_link']->value) {?><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php }?>
              <span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['name'], ENT_QUOTES, 'UTF-8');?>
</span>
            <?php if ($_smarty_tpl->tpl_vars['add_product_link']->value) {?></a><?php }?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['attributes'], 'value', false, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
              <div class="product-line-info product-line-info-secondary text-muted">
                <span class="label"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value, ENT_QUOTES, 'UTF-8');?>
:</span>
                <span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['value']->value, ENT_QUOTES, 'UTF-8');?>
</span>
              </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php if (is_array($_smarty_tpl->tpl_vars['product']->value['customizations']) && count($_smarty_tpl->tpl_vars['product']->value['customizations'])) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['product']->value['customizations'], 'customization');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['customization']->value) {
?>
                <div class="customizations">
                  <a href="#" data-toggle="modal" data-target="#product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</a>
                </div>
                <div class="modal fade customization-modal" id="product-customizations-modal-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['customization']->value['id_customization'], ENT_QUOTES, 'UTF-8');?>
" tabindex="-1" role="dialog" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</h4>
                      </div>
                      <div class="modal-body">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customization']->value['fields'], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                          <div class="product-customization-line row">
                            <div class="col-sm-3 col-xs-4 label">
                              <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>

                            </div>
                            <div class="col-sm-9 col-xs-8 value">
                              <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                <?php if ((int)$_smarty_tpl->tpl_vars['field']->value['id_module']) {?>
                                  <?php echo $_smarty_tpl->tpl_vars['field']->value['text'];?>

                                <?php } else { ?>
                                  <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                              <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                              <?php }?>
                            </div>
                          </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                      </div>
                    </div>
                  </div>
                </div>
              <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayProductPriceBlock','product'=>$_smarty_tpl->tpl_vars['product']->value,'type'=>"unit_price"),$_smarty_tpl ) );?>

          </div>
          <div class="col-sm-6 col-12 qty">
            <div class="row">
              <div class="col-5 text-right text-left"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['price'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="col-2">x<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['quantity'], ENT_QUOTES, 'UTF-8');?>
</div>
              <div class="col-5 text-right bold"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['total'], ENT_QUOTES, 'UTF-8');?>
</div>
            </div>
          </div>
        </div>
      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

      <hr>

      <table>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['subtotals']->value, 'subtotal');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['subtotal']->value) {
?>
          <?php if ($_smarty_tpl->tpl_vars['subtotal']->value['type'] !== 'tax' && $_smarty_tpl->tpl_vars['subtotal']->value['label'] !== null) {?>
            <tr>
              <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['label'], ENT_QUOTES, 'UTF-8');?>
</td>
              <td><?php if ('discount' == $_smarty_tpl->tpl_vars['subtotal']->value['type']) {?>-&nbsp;<?php }
echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotal']->value['value'], ENT_QUOTES, 'UTF-8');?>
</td>
            </tr>
          <?php }?>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if (!$_smarty_tpl->tpl_vars['configuration']->value['display_prices_tax_incl'] && $_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {?>
          <tr>
            <td><span class="text-uppercase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['labels']->value['tax_short'], ENT_QUOTES, 'UTF-8');?>
</span></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
          <tr class="total-value font-weight-bold">
            <td><span class="text-uppercase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total_including_tax']['label'], ENT_QUOTES, 'UTF-8');?>
</span></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total_including_tax']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
        <?php } else { ?>
          <tr class="total-value font-weight-bold">
            <td><span class="text-uppercase"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total']['label'], ENT_QUOTES, 'UTF-8');?>
&nbsp;<?php if ($_smarty_tpl->tpl_vars['configuration']->value['taxes_enabled']) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['labels']->value['tax_short'], ENT_QUOTES, 'UTF-8');
}?></span></td>
            <td><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['totals']->value['total']['value'], ENT_QUOTES, 'UTF-8');?>
</td>
          </tr>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['subtotals']->value['tax']['label'] !== null) {?>
          <tr class="sub taxes">
            <td><span class="label"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'%label%:','sprintf'=>array('%label%'=>$_smarty_tpl->tpl_vars['subtotals']->value['tax']['label']),'d'=>'Shop.Theme.Global'),$_smarty_tpl ) );?>
</span>&nbsp;<span class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['subtotals']->value['tax']['value'], ENT_QUOTES, 'UTF-8');?>
</span></td>
          </tr>
        <?php }?>
      </table>
    <?php
}
}
/* {/block 'order_confirmation_table'} */
}
