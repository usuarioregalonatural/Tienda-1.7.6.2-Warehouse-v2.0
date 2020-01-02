<?php
/* Smarty version 3.1.33, created on 2020-01-02 13:33:41
  from '/var/www/html/modules/an_productfields/views/templates/hook/order_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0de325b16ac9_57507628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a7ce183071d6169bf674a64a6740f3294ad965e2' => 
    array (
      0 => '/var/www/html/modules/an_productfields/views/templates/hook/order_header.tpl',
      1 => 1577795554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0de325b16ac9_57507628 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    var an_opc_ulr = decodeURIComponent("<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getModuleLink('an_productfields','opc',array(),true),'url' )), ENT_QUOTES, 'UTF-8');?>
");
    var an_new = <?php if ($_smarty_tpl->tpl_vars['an_new']->value) {?>true<?php } else { ?>false<?php }?>;
    var an_pf_text_counter = <?php if ($_smarty_tpl->tpl_vars['an_pf_text_counter']->value) {?>true<?php } else { ?>false<?php }?>;
    var an_pf_dynamic_price = <?php if ($_smarty_tpl->tpl_vars['an_pf_dynamic_price']->value) {?>true<?php } else { ?>false<?php }?>;
    var an_pf_js_position = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_pf_js_position']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var an_pf_js_position_type = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_pf_js_position_type']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";
    var an_date_format = "<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_date_format']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
";

    if (!an_pf_js_position) {
        an_pf_js_position = '.product-add-to-cart';
    }
<?php echo '</script'; ?>
>
<?php echo '<script'; ?>
>
    function defer(method) {
        //TODO rewrite native!
        if (
            document.querySelector(an_pf_js_position) != null
            && document.querySelector('#an_productfields') != null
            && document.querySelector('#an_productfields').hasChildNodes()
        ) {
            setTimeout(function() { method();}, 1);
        } else {
            setTimeout(function() { defer(method); }, 1);
        }
    }
    function ready(){
        defer(function () {
            switch (an_pf_js_position_type) {
                case 'after':
                    document.querySelector(an_pf_js_position).after(document.querySelector('#an_productfields'));
                    break;
                case 'prepend':
                    document.querySelector(an_pf_js_position).prepend(document.querySelector('#an_productfields'));
                    break;
                case 'append':
                    document.querySelector(an_pf_js_position).append(document.querySelector('#an_productfields'));
                    break;
                default:
                    document.querySelector(an_pf_js_position).before(document.querySelector('#an_productfields'));
            }
        });
    }
    document.addEventListener("DOMContentLoaded", ready);

<?php echo '</script'; ?>
><?php }
}
