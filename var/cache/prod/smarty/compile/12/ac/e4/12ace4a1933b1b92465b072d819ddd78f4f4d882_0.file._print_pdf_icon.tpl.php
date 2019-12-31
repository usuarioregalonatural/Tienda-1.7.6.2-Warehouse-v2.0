<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:45:58
  from '/var/www/html/admin786icvj8i/themes/default/template/controllers/orders/_print_pdf_icon.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b4306816335_89995601',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '12ace4a1933b1b92465b072d819ddd78f4f4d882' => 
    array (
      0 => '/var/www/html/admin786icvj8i/themes/default/template/controllers/orders/_print_pdf_icon.tpl',
      1 => 1577795553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b4306816335_89995601 (Smarty_Internal_Template $_smarty_tpl) {
?>
<span class="btn-group-action">
	<span class="btn-group">
	<?php if (Configuration::get('PS_INVOICE') && $_smarty_tpl->tpl_vars['order']->value->invoice_number) {?>
		<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateInvoicePDF','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id)),'html','UTF-8' ));?>
">
			<i class="icon-file-text"></i>
		</a>
	<?php }?>
		<?php if ($_smarty_tpl->tpl_vars['order']->value->delivery_number) {?>
		<a class="btn btn-default _blank" href="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf',true,array(),array('submitAction'=>'generateDeliverySlipPDF','id_order'=>$_smarty_tpl->tpl_vars['order']->value->id)),'html','UTF-8' ));?>
">
			<i class="icon-truck"></i>
		</a>
	<?php }?>
	</span>
</span>
<?php }
}
