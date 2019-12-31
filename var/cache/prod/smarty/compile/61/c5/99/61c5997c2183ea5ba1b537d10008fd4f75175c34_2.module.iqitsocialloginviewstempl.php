<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:45:53
  from 'module:iqitsocialloginviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b51117f1fe8_36044865',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '61c5997c2183ea5ba1b537d10008fd4f75175c34' => 
    array (
      0 => 'module:iqitsocialloginviewstempl',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b51117f1fe8_36044865 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['facebook_status']->value || $_smarty_tpl->tpl_vars['google_status']->value || $_smarty_tpl->tpl_vars['twitter_status']->value || $_smarty_tpl->tpl_vars['instagram_status']->value) {?>
<div class="iqitsociallogin iqitsociallogin-checkout iqitsociallogin-colors-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['btn_colors']->value, ENT_QUOTES, 'UTF-8');?>
 pb-3 pt-1">
        <span class="text-muted pr-1"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Or connect with social account:','mod'=>'iqitsociallogin'),$_smarty_tpl ) );?>
</span>

    <?php if ($_smarty_tpl->tpl_vars['facebook_status']->value) {?>
        <a <?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
                onclick="iqitSocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'facebook','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
            <?php } else { ?>
                href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'facebook','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
            <?php }?>
           class="btn btn-secondary btn-iqitsociallogin btn-facebook btn-sm mt-1 mb-1">
            <i class="fa fa-facebook-square" aria-hidden="true"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Facebook','mod'=>'iqitsociallogin'),$_smarty_tpl ) );?>

        </a>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['google_status']->value) {?>
        <a <?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
                onclick="iqitSocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'google','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
            <?php } else { ?>
                href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'google','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
            <?php }?>
           class="btn btn-secondary btn-iqitsociallogin btn-google btn-sm mt-1 mb-1">
            <i class="fa fa-google-plus-square" aria-hidden="true"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Google+','mod'=>'iqitsociallogin'),$_smarty_tpl ) );?>

        </a>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['instagram_status']->value) {?>
        <a <?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
                onclick="iqitSocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'instagram','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
            <?php } else { ?>
                href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'instagram','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
            <?php }?>
           class="btn btn-secondary btn-iqitsociallogin btn-instagram btn-sm mt-1 mb-1">
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Instagram','mod'=>'iqitsociallogin'),$_smarty_tpl ) );?>

        </a>
    <?php }?>

    <?php if ($_smarty_tpl->tpl_vars['twitter_status']->value) {?>
        <a <?php if ($_smarty_tpl->tpl_vars['type']->value) {?>
                onclick="iqitSocialPopup('<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'twitter','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
')"
            <?php } else { ?>
                href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'module','name'=>'iqitsociallogin','controller'=>'authenticate','params'=>array('provider'=>'twitter','page'=>$_smarty_tpl->tpl_vars['page']->value)),$_smarty_tpl ) );?>
"
            <?php }?>
           class="btn btn-secondary btn-iqitsociallogin btn-twitter btn-sm mt-1 mb-1">
            <i class="fa fa-twitter-square" aria-hidden="true"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Twitter','mod'=>'iqitsociallogin'),$_smarty_tpl ) );?>

        </a>
    <?php }?>
</div>
<?php }?>

<?php echo '<script'; ?>
 type="text/javascript">
    
    function iqitSocialPopup(url) {
        var dualScreenLeft = window.screenLeft != undefined ? window.screenLeft : screen.left;
        var dualScreenTop = window.screenTop != undefined ? window.screenTop : screen.top;
        var width = window.innerWidth ? window.innerWidth : document.documentElement.clientWidth ? document.documentElement.clientWidth : screen.width;
        var height = window.innerHeight ? window.innerHeight : document.documentElement.clientHeight ? document.documentElement.clientHeight : screen.height;
        var left = ((width / 2) - (960 / 2)) + dualScreenLeft;
        var top = ((height / 2) - (600 / 2)) + dualScreenTop;
        var newWindow = window.open(url, '_blank', 'scrollbars=yes,top=' + top + ',left=' + left + ',width=960,height=600');
        if (window.focus) {
            newWindow.focus();
        }
    }
    
<?php echo '</script'; ?>
>




<?php }
}
