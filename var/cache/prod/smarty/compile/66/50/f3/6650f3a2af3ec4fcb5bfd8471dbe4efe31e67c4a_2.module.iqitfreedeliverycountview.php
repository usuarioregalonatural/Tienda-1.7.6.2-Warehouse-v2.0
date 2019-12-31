<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:04:26
  from 'module:iqitfreedeliverycountview' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b475a565d38_97945772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6650f3a2af3ec4fcb5bfd8471dbe4efe31e67c4a' => 
    array (
      0 => 'module:iqitfreedeliverycountview',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b475a565d38_97945772 (Smarty_Internal_Template $_smarty_tpl) {
?>



<div class="alert alert-info iqitfreedeliverycount p-2 <?php if ($_smarty_tpl->tpl_vars['hide']->value) {?>hidden-xs-up<?php }?>" role="alert">
    <div class="iqitfreedeliverycount-title <?php if (isset($_smarty_tpl->tpl_vars['txt']->value) && $_smarty_tpl->tpl_vars['txt']->value != '') {?>mb-1<?php }?>"><strong><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Spend','mod'=>'iqitfreedeliverycount'),$_smarty_tpl ) );?>
 <span class="ifdc-remaining-price"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['free_ship_remaining']->value, ENT_QUOTES, 'UTF-8');?>
</span> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'more to get free shipping!','mod'=>'iqitfreedeliverycount'),$_smarty_tpl ) );?>
</strong></div>
    <?php if (isset($_smarty_tpl->tpl_vars['txt']->value) && $_smarty_tpl->tpl_vars['txt']->value != '') {
echo $_smarty_tpl->tpl_vars['txt']->value;
}?> </div>
<?php }
}
