<?php
/* Smarty version 3.1.33, created on 2020-01-02 12:00:44
  from 'module:iqitaddthispluginviewstem' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dcd5c360298_43406256',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9d0a26188da6655ac41f6f010ba32786636ac74' => 
    array (
      0 => 'module:iqitaddthispluginviewstem',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0dcd5c360298_43406256 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="additional_button">
    <?php echo $_smarty_tpl->tpl_vars['addthisplugin_content']->value;?>


</div>
<?php if (isset($_smarty_tpl->tpl_vars['addthisplugin_id']->value) && ($_smarty_tpl->tpl_vars['addthisplugin_id']->value == "0")) {?>
    <?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-50d44b832bee7204"><?php echo '</script'; ?>
>
<?php } else { ?>
    <?php echo '<script'; ?>
 type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['addthisplugin_id']->value, ENT_QUOTES, 'UTF-8');?>
"><?php echo '</script'; ?>
>
<?php }
}
}
