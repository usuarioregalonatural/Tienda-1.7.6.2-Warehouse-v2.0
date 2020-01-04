<?php
/* Smarty version 3.1.33, created on 2020-01-04 12:31:39
  from '/var/www/html/admin786icvj8i/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e10779bdb7190_73473000',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '30843accc9ad7f911150e27253f19e6537158c55' => 
    array (
      0 => '/var/www/html/admin786icvj8i/themes/default/template/content.tpl',
      1 => 1577795553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e10779bdb7190_73473000 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
