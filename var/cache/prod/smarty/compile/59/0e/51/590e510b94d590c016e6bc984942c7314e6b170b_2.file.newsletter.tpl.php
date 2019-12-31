<?php
/* Smarty version 3.1.33, created on 2019-12-31 19:17:20
  from '/var/www/html/modules/iqitelementor/views/templates/widgets/newsletter.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b90b0c67826_34014763',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '590e510b94d590c016e6bc984942c7314e6b170b' => 
    array (
      0 => '/var/www/html/modules/iqitelementor/views/templates/widgets/newsletter.tpl',
      1 => 1577795555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b90b0c67826_34014763 (Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="elementor-newsletter">
    <form action="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'index','params'=>array('fc'=>'module','module'=>'iqitemailsubscriptionconf','controller'=>'subscription')),$_smarty_tpl ) );?>
" method="post" class="elementor-newsletter-form">
        <div class="row">
            <div class="col-12">
                <input
                        class="btn btn-primary pull-right hidden-xs-down elementor-newsletter-btn"
                        name="submitNewsletter"
                        type="submit"
                        value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Subscribe','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
"
                >
                <input
                        class="btn btn-primary pull-right hidden-sm-up elementor-newsletter-btn"
                        name="submitNewsletter"
                        type="submit"
                        value="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'OK','mod'=>'iqitelementor'),$_smarty_tpl ) );?>
"
                >
                <div class="input-wrapper">
                    <input
                            name="email"
                            class="form-control elementor-newsletter-input"
                            type="email"
                            value=""
                            placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your email address','d'=>'Shop.Forms.Labels'),$_smarty_tpl ) );?>
"
                    >
                </div>
                <input type="hidden" name="action" value="0">
                <?php if (isset($_smarty_tpl->tpl_vars['id_module']->value)) {?>
                    <div class="mt-2 text-muted"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayGDPRConsent','id_module'=>$_smarty_tpl->tpl_vars['id_module']->value),$_smarty_tpl ) );?>
</div>
                <?php }?>
            </div>
        </div>
    </form>
</div><?php }
}
