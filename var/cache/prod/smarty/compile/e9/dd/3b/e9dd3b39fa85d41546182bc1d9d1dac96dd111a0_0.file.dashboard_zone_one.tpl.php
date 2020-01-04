<?php
/* Smarty version 3.1.33, created on 2020-01-04 12:31:39
  from '/var/www/html/modules/iqitdashboardnews/views/templates/hook/dashboard_zone_one.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e10779bac3ea5_37957511',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e9dd3b39fa85d41546182bc1d9d1dac96dd111a0' => 
    array (
      0 => '/var/www/html/modules/iqitdashboardnews/views/templates/hook/dashboard_zone_one.tpl',
      1 => 1577795555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e10779bac3ea5_37957511 (Smarty_Internal_Template $_smarty_tpl) {
?><section id="dashiqitnews" class="panel widget">
	<div class="panel-heading">
		 <img src="../modules/iqitdashboardnews/views/img/logo.png" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'IQIT-COMMERCE updates','mod'=>'iqitdashboardnews'),$_smarty_tpl ) );?>
" /> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'updates','mod'=>'iqitdashboardnews'),$_smarty_tpl ) );?>

	</div>
	<section id="iqit_iframe">
		<iframe width="100%" height="180px"
				src="//iqit-commerce.com/iframe/lastnews/news17.php?product=warehouse&version=<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['current_version']->value,'html','UTF-8' ));?>
"
				style="border: none; overflow: hidden;"></iframe>
	</section>
</section>
<?php }
}
