<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:47:09
  from '/var/www/html/modules/an_productfields/views/templates/admin/fields.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b434d3fc088_00421507',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '087651558e6530728a90e0843139d09354c04fcd' => 
    array (
      0 => '/var/www/html/modules/an_productfields/views/templates/admin/fields.tpl',
      1 => 1577795554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b434d3fc088_00421507 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
>
    jQuery(document).ready(function(){
        jQuery('.an_tabs_btn').click(function(){
            $('.an_tabs_btn').removeClass('btn-info');
            $(this).addClass('btn-info');
            $('.tab_content').hide();
            $('#' + $(this).attr('id') + '_content').show();
        });
    });
<?php echo '</script'; ?>
>
<div id="tabs" class="an_productfields-style col-lg-3 col-md-12">
    <div class="tabswrapper">
        <button id="btn_tab_1" class="btn btn-default btn-info an_tabs_btn">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product fields','mod'=>'an_productfields'),$_smarty_tpl ) );?>

        </button>
        <button id="btn_tab_2" class="btn btn-default an_tabs_btn">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Settings','mod'=>'an_productfields'),$_smarty_tpl ) );?>

        </button>
        <a href="http://bit.ly/2V5FJi3" class="btn btn-default an_tabs_btn">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Support','mod'=>'an_productfields'),$_smarty_tpl ) );?>

        </a>
        <a href="http://bit.ly/2K9MYjW" class="btn btn-default an_tabs_btn">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Another modules','mod'=>'an_productfields'),$_smarty_tpl ) );?>

        </a>
    </div>
    <div class="an_theme-text-menu">
        <strong>Rating:</strong> <br>
        If you like this module, Please RATE me 5 stars <a style="padding: 0px;" href="http://bit.ly/2WGXfp0">here</a>.<br>
        Thank you very much!
    </div>
</div>
<div class="an_productfields-style col-lg-9 col-md-12">
    <div id="btn_tab_1_content" class="tab_content"><?php echo $_smarty_tpl->tpl_vars['an_pf_feildslist']->value;?>
</div>     <div id="btn_tab_2_content" class="tab_content" style="display: none"> <?php echo $_smarty_tpl->tpl_vars['an_pf_settings']->value;?>
</div> </div>
<div class="clearfix"></div><?php }
}
