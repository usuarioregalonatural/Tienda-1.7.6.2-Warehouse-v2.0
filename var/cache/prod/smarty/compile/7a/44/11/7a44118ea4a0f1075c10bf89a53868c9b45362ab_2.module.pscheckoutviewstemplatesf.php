<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:46:31
  from 'module:pscheckoutviewstemplatesf' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b513766fd06_15880122',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7a44118ea4a0f1075c10bf89a53868c9b45362ab' => 
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
function content_5e0b513766fd06_15880122 (Smarty_Internal_Template $_smarty_tpl) {
?>
<link rel="preload" href="https://www.paypal.com/sdk/js?components=hosted-fields,buttons&amp;client-id=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypalClientId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&amp;merchant-id=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['merchantId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&amp;intent=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['intent']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&amp;currency=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currencyIsoCode']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" as="script">

<div class="paypal-tips"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'You will be redirected to the related gateway to complete payment','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</div>

<div>
  <div id="paypal-button-container"></div>

  <form id="conditions-to-approve-paypal" method="GET">
    <label for="conditions_to_approve">
      <input id="conditions_to_approve" type="checkbox" name="conditions_to_approve" class="buttons-approve">
      <?php $_smarty_tpl->_assignInScope('link_url', $_smarty_tpl->tpl_vars['link']->value->getCMSLink('3'));?>
      <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'I agree to the [1]terms of service[/1] and will adhere to them unconditionally.','mod'=>'ps_checkout','tags'=>array("<a href=\"".((string)$_smarty_tpl->tpl_vars['link_url']->value)."\" id=\"cta-terms-and-conditions-checkout\">")),$_smarty_tpl ) );?>

    </label>
  </form>
</div>

<div id="paypal-approve-error" class="hide-paypal-error">
  <article class="alert alert-danger" role="alert" data-alert="danger">
    <ul>
      <li><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please indicate that you have read Terms & Conditions and accept all terms.','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
</li>
    </ul>
  </article>
</div>

<?php echo '<script'; ?>
>
/**
 * Create paypal script
 */
function initPaypalScript() {
  if (typeof paypal !== 'undefined') {
    return;
  }

  let psCheckoutScript = document.getElementById('paypalSdkPsCheckout');

  if (psCheckoutScript !== null) {
    return;
  }

  const paypalScript = document.createElement('script');
  paypalScript.setAttribute('src', "https://www.paypal.com/sdk/js?components=hosted-fields,buttons&client-id=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypalClientId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&merchant-id=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['merchantId']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&intent=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['intent']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
&currency=<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['currencyIsoCode']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
");
  paypalScript.setAttribute('data-client-token', "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['clientToken']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
");
  paypalScript.setAttribute('id', 'paypalSdkPsCheckout');
  paypalScript.setAttribute('async', '');
  document.head.appendChild(paypalScript);
}

initPaypalScript();
<?php echo '</script'; ?>
>


<?php echo '<script'; ?>
 type="text/javascript">
  const cardNumberPlaceholder = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Card number','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
";
  const expDatePlaceholder = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'MM/YY','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
";
  const cvvPlaceholder = "<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'XXX','mod'=>'ps_checkout'),$_smarty_tpl ) );?>
";
  const paypalOrderId = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypalOrderId']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
  const validateOrderLinkByCard = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['validateOrderLinkByCard']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
  const validateOrderLinkByPaypal = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['validateOrderLinkByPaypal']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
  const cardIsActive = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['cardIsActive']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
  const paypalIsActive = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['paypalIsActive']->value,'javascript','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
<?php echo '</script'; ?>
>

<?php }
}
