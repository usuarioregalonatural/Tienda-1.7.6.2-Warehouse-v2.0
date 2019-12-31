<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:46:31
  from 'module:pscheckoutviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b513764b9b8_77139375',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0224826d04dba8b200307e88dce8ec6d7c5a7a4d' => 
    array (
      0 => 'module:pscheckoutviewstemplatesf',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b513764b9b8_77139375 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="additional-information">

    <div id="payments-sdk__contingency-lightbox"></div>

    <form id="hosted-fields-form">

        <div class="form-group row">
            <div class="col-md-8">
                <label for="card-number" class="form-control-label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card number','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</label>
                <div id="card-number" class="form-control">
                    <div id="card-image">
                        <i class="material-icons defautl-credit-card">credit_card</i>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group row">
            <div class="col-md-4">
                <label for="expiration-date" class="form-control-label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Expiry date','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</label>
                <div id="expiration-date" class="form-control"></div>
            </div>
            <div class="col-md-4">
                <label for="cvv" class="form-control-label required"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'CVC','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</label>
                <div id="cvv" class="form-control"></div>
            </div>
        </div>

                <?php if ($_smarty_tpl->tpl_vars['isCardPaymentError']->value) {?>
        <div class="alert alert-danger" role="alert" data-alert="danger">
          <p>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'There was an error during the payment. Please try again or contact the support.','mod'=>'ps_checkout'),$_smarty_tpl ) );?>

          </p>
        </div>
        <?php }?>

    </form>


        <div id="hostedFieldsErrors" class="hide-paypal-error">
        <div class="alert alert-danger" role="alert" data-alert="danger">
            <ul id="hostedFieldsErrorList">
            </ul>
        </div>
    </div>
</div>
<?php }
}
