<?php
/* Smarty version 3.1.33, created on 2020-01-03 12:12:18
  from 'module:iqitcountdownviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0f2192d2e7d6_77252945',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '55c7a89f423f7f64b1b84881dcb668e4d788f013' => 
    array (
      0 => 'module:iqitcountdownviewstemplat',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0f2192d2e7d6_77252945 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['to']->value) && $_smarty_tpl->tpl_vars['to']->value != '0000-00-00 00:00:00') {?>
    <div class="price-countdown-wrapper">
        <div class="price-countdown badge-discount discount">
            <span class="price-countdown-title"><i class="fa fa-clock-o fa-spin" aria-hidden="true"></i> <span
                        class="time-txt"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Time left','mod'=>'iqitcountdown'),$_smarty_tpl ) );?>
</span></span>
            <div class="count-down-timer" id="price-countdown-product" data-countdown-product="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['to']->value, ENT_QUOTES, 'UTF-8');?>
"></div>
        </div>
    </div>
<?php }
}
}
