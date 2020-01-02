<?php
/* Smarty version 3.1.33, created on 2020-01-02 19:00:16
  from '/var/www/html/modules/whatsappchat/views/templates/hook/template.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0e2fb09092a6_00118663',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '393204a9f825187765026a6cade55d76e5b529d9' => 
    array (
      0 => '/var/www/html/modules/whatsappchat/views/templates/hook/template.tpl',
      1 => 1577795555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0e2fb09092a6_00118663 (Smarty_Internal_Template $_smarty_tpl) {
if (($_smarty_tpl->tpl_vars['custom_js']->value != '' && $_smarty_tpl->tpl_vars['from_bo']->value != '1')) {
echo '<script'; ?>
>
    <?php echo $_smarty_tpl->tpl_vars['custom_js']->value;?>

<?php echo '</script'; ?>
>
<?php }
if (($_smarty_tpl->tpl_vars['custom_css']->value != '' && $_smarty_tpl->tpl_vars['from_bo']->value != '1')) {?>
<style id="whatsappchat_custom_css" type="text/css">
    <?php echo $_smarty_tpl->tpl_vars['custom_css']->value;?>

</style>
<?php }
if (version_compare(@constant('_PS_VERSION_'),'1.5','<')) {?>
    
    <?php echo '<script'; ?>
>
    $(document).ready(function() {
        $("a.whatsappchat-anchor").click(function(event) {
            event.preventDefault();
            window.open($(this).attr("href"), this.target);
        });
    });
    <?php echo '</script'; ?>
>
    
<?php }
if ($_smarty_tpl->tpl_vars['agents']->value !== false && $_smarty_tpl->tpl_vars['from_bo']->value != '1' && $_smarty_tpl->tpl_vars['offline_message']->value == '') {?>
    <?php echo '<script'; ?>
>
        <?php if (($_smarty_tpl->tpl_vars['whatsapp_action']->value === 'quickview' || $_smarty_tpl->tpl_vars['whatsapp_action']->value === 1)) {?>
            $('.jBox-wrapper').each(function(){
                $(this).remove();
            });
            $('.whatsappchat-agents-container').last().remove();
            setAgentsBox();
            $('#whatsappchat-agents<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['whatsapp_action']->value === 'quickview' || $_smarty_tpl->tpl_vars['whatsapp_action']->value === 1)) {?>quickview<?php }?>').click(function(){
                if ($('.jBox-wrapper').size() > 1) {
                    $('.jBox-wrapper').last().remove();
                }
            });
        <?php } else { ?>
            if (document.addEventListener) {
                window.addEventListener('load', setAgentsBox, false);
            } else {
                window.attachEvent('onload', setAgentsBox);
            }
        <?php }?>
        
        function setAgentsBox() {
            var test = new jBox('Tooltip', {
                attach: '#whatsappchat-agents<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['whatsapp_action']->value === 'quickview' || $_smarty_tpl->tpl_vars['whatsapp_action']->value === 1)) {?>quickview<?php }?>',
                position: {
                    x: 'center',
                    y: 'top'
                },
                content: $('.whatsappchat-agents-container<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['whatsapp_action']->value === 'quickview' || $_smarty_tpl->tpl_vars['whatsapp_action']->value === 1)) {?>quickview<?php }?>'),
                trigger: 'click',
                animation: {open: 'move', close: 'move'},
                closeButton: true,
                closeOnClick: true,
                closeOnEsc: true,
                adjustPosition: true,
                adjustTracker: true,
                adjustDistance: {top: 45, right: 5, bottom: 5, left: 5},
                zIndex: 8000,
                preventDefault: true
            });
        }
        
    <?php echo '</script'; ?>
>
    <div class="whatsappchat-agents-container whatsappchat-agents-container<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['whatsapp_action']->value === 'quickview' || $_smarty_tpl->tpl_vars['whatsapp_action']->value === 1)) {?>quickview<?php }?>" style="display: none;">
        <div class="whatsappchat-agents-title<?php if (version_compare(@constant('_PS_VERSION_'),'1.7','>=')) {?> whatsappchat-agents-title17<?php }?>" style="background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>"Hi! Click one of our agents below and we will get back to you as soon as possible.",'mod'=>'whatsappchat'),$_smarty_tpl ) );?>
</div>
        <div class="whatsappchat-agents-content">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['agents']->value, 'agent');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['agent']->value) {
?>
                <a href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['agent']->value['url'],'quotes' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" class="whatsappchat-agents-content-agent">
                    <div class="whatsappchat-agents-content-image">
                        <img src="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['agents_img_src']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['agent']->value['image'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
                    </div>
                    <div class="whatsappchat-agents-content-info<?php if (version_compare(@constant('_PS_VERSION_'),'1.7','>=')) {?> whatsappchat-agents-content-info17<?php }?>">
                        <span class="whatsappchat-agents-content-department"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['agent']->value['department'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                        <span class="whatsappchat-agents-content-name<?php if (version_compare(@constant('_PS_VERSION_'),'1.7','>=')) {?> whatsappchat-agents-content-name17<?php }?>"><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['agent']->value['name'],'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</span>
                    </div>
                    <div class="clearfix"></div>
                </a>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
<?php }
if ($_smarty_tpl->tpl_vars['whatsapp_class']->value != 'floating') {?>
    <?php if ($_smarty_tpl->tpl_vars['open_chat']->value && $_smarty_tpl->tpl_vars['from_bo']->value != '1' && $_smarty_tpl->tpl_vars['offline_link']->value != '') {?><a class="whatsappchat-anchor whatsappchat-anchor<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['offline_link']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['open_chat']->value && $_smarty_tpl->tpl_vars['from_bo']->value != '1' && $_smarty_tpl->tpl_vars['offline_message']->value == '') {?><a class="whatsappchat-anchor whatsappchat-anchor<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" target="_blank" <?php if ($_smarty_tpl->tpl_vars['agents']->value !== false && $_smarty_tpl->tpl_vars['from_bo']->value != '1' && version_compare(@constant('_PS_VERSION_'),'1.5','>=')) {?>href="javascript:void(0);" <?php } else { ?>href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>><?php }?>
        <div class="whatsapp whatsapp_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 whatsapp-<?php if (isset($_smarty_tpl->tpl_vars['from_bo']->value) && $_smarty_tpl->tpl_vars['from_bo']->value != '1') {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsapp_class']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}
if ($_smarty_tpl->tpl_vars['offline_message']->value != '' && ($_smarty_tpl->tpl_vars['whatsapp_class']->value == 'topWidth' || $_smarty_tpl->tpl_vars['whatsapp_class']->value == 'bottomWidth')) {?> whatsapp-offline<?php }?>"
            <?php if ($_smarty_tpl->tpl_vars['color']->value != '' && ($_smarty_tpl->tpl_vars['whatsapp_class']->value == 'topWidth' || $_smarty_tpl->tpl_vars['whatsapp_class']->value == 'bottomWidth') && $_smarty_tpl->tpl_vars['from_bo']->value != '1') {?>style="background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?>>
            <span <?php if ($_smarty_tpl->tpl_vars['color']->value != '') {?>style="background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }
if ($_smarty_tpl->tpl_vars['offline_message']->value != '') {?> class="whatsapp-offline"<?php }
if ($_smarty_tpl->tpl_vars['agents']->value !== false && $_smarty_tpl->tpl_vars['from_bo']->value != '1') {?> id="whatsappchat-agents<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['whatsapp_action']->value === 'quickview' || $_smarty_tpl->tpl_vars['whatsapp_action']->value === 1)) {?>quickview<?php }?>"<?php }?>>
                <i class="whatsapp-icon" <?php if ($_smarty_tpl->tpl_vars['button_text']->value == '') {?>style="padding-right:0px!important;"<?php }?>></i>
                <?php if ($_smarty_tpl->tpl_vars['offline_message']->value != '') {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['offline_message']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?>
            </span>
        </div>
    <?php if ($_smarty_tpl->tpl_vars['open_chat']->value && $_smarty_tpl->tpl_vars['from_bo']->value != '1' && $_smarty_tpl->tpl_vars['offline_message']->value == '') {?></a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['open_chat']->value && $_smarty_tpl->tpl_vars['from_bo']->value != '1' && $_smarty_tpl->tpl_vars['offline_link']->value != '') {?></a><?php }
} else { ?>
    <?php if ($_smarty_tpl->tpl_vars['open_chat']->value && $_smarty_tpl->tpl_vars['from_bo']->value != '1' && $_smarty_tpl->tpl_vars['offline_message']->value == '') {?>
        <a<?php if ($_smarty_tpl->tpl_vars['agents']->value !== false && $_smarty_tpl->tpl_vars['from_bo']->value != '1') {?> id="whatsappchat-agents<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if (($_smarty_tpl->tpl_vars['whatsapp_action']->value === 'quickview' || $_smarty_tpl->tpl_vars['whatsapp_action']->value === 1)) {?>quickview<?php }?>"<?php }?> target="_blank" href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="float whatsapp_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_id']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 float-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 float-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsapp_class']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['offline_message']->value != '') {?> whatsapp-offline<?php }?>" style="background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['open_chat']->value && $_smarty_tpl->tpl_vars['from_bo']->value != '1' && $_smarty_tpl->tpl_vars['offline_message']->value != '') {?>
        <a class="float float-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 float-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsapp_class']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['offline_message']->value != '') {?> whatsapp-offline<?php }?>" <?php if ($_smarty_tpl->tpl_vars['offline_link']->value != '') {?>href="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['offline_link']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"<?php }?> style="background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <?php if ($_smarty_tpl->tpl_vars['from_bo']->value == '1') {?>
        <a class="float float-floating floating-bo<?php if ($_smarty_tpl->tpl_vars['offline_message']->value != '') {?> whatsapp-offline<?php }?>" style="background-color: <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['color']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
    <?php }?>
    <i class="whatsapp-icon<?php if (version_compare(@constant('_PS_VERSION_'),'1.5','>=')) {?>-3x<?php }?>" <?php if ($_smarty_tpl->tpl_vars['button_text']->value != '') {?>style="padding-right:0px!important;"<?php }?>></i>
    <?php if ($_smarty_tpl->tpl_vars['from_bo']->value == '1') {?></a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['open_chat']->value && $_smarty_tpl->tpl_vars['from_bo']->value != '1') {?></a><?php }?>
    <?php if ($_smarty_tpl->tpl_vars['button_text']->value != '' && $_smarty_tpl->tpl_vars['from_bo']->value != '1') {?>
        <div class="label-container label-container-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['position']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
 float-<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsapp_class']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
">
            <?php if ((strpos($_smarty_tpl->tpl_vars['position']->value,'left') != false || $_smarty_tpl->tpl_vars['position']->value == 'left')) {?>
            <i class="icon icon-caret-left label-arrow" style="font-size: x-large;"></i>
            <div class="label-text"><?php if ($_smarty_tpl->tpl_vars['offline_message']->value != '') {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['offline_message']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></div>
            <?php } else { ?>
            <div class="label-text"><?php if ($_smarty_tpl->tpl_vars['offline_message']->value != '') {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['offline_message']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
} else {
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['button_text']->value,'html','UTF-8' )), ENT_QUOTES, 'UTF-8');
}?></div>
            <i class="icon icon-play label-arrow"></i>
            <?php }?>
        </div>
    <?php }
}
if (!$_smarty_tpl->tpl_vars['from_bo']->value && $_smarty_tpl->tpl_vars['whatsapp_class']->value == 'hookDisplayWhatsAppProductSocialButtons') {
echo '<script'; ?>
>
if (document.addEventListener) {
    window.addEventListener('load', setWhatsAppSocialButton, false);
} else {
    window.attachEvent('onload', setWhatsAppSocialButton);
}
function setWhatsAppSocialButton() {
    <?php if (version_compare(@constant('_PS_VERSION_'),'1.7','>=')) {?>
        var element_to_copy = $('div.product-additional-info .social-sharing ul li').last().clone();
        if (typeof element_to_copy === 'undefined') {
            $('.whatsapp-hookDisplayWhatsAppProductSocialButtons').show();
        } else {
            element_to_copy.addClass('whatsapp-social-button');
            element_to_copy.children().attr('href', "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
").attr('title', 'WhatsApp');
            $(element_to_copy).appendTo('div.product-additional-info .social-sharing ul');
        }
    <?php } else { ?>
        var element_to_copy16 = $('p.socialsharing_product button').last().clone();
        if (typeof element_to_copy16 === 'undefined') {
            $('.whatsapp-hookDisplayWhatsAppProductSocialButtons').show();
        } else {
            element_to_copy16.addClass('whatsapp-social-button');
            element_to_copy.children().attr('href', "<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
").attr('title', 'WhatsApp');
            $(element_to_copy16).appendTo('p.socialsharing_product');
        }
    <?php }?>
}
<?php echo '</script'; ?>
>
<?php }
}
}
