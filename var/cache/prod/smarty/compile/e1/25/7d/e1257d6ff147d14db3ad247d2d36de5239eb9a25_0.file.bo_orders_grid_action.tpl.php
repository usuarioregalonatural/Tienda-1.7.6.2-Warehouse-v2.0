<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:45:58
  from '/var/www/html/modules/whatsappchat/views/templates/hook/bo_orders_grid_action.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b43066420e0_47153421',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1257d6ff147d14db3ad247d2d36de5239eb9a25' => 
    array (
      0 => '/var/www/html/modules/whatsappchat/views/templates/hook/bo_orders_grid_action.tpl',
      1 => 1577795555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b43066420e0_47153421 (Smarty_Internal_Template $_smarty_tpl) {
if (version_compare(@constant('_PS_VERSION_'),'1.5','<')) {?>
    <!-- TODO PS14 -->
    
    <?php echo '<script'; ?>
 type="text/javascript">
        if (document.URL.indexOf('id_order') > 0) {
            $(document).ready(function() {
                var id_order = '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( (($tmp = @$_GET['id_order'])===null||$tmp==='' ? 0 : $tmp),'htmlall','UTF-8' ));?>
'
                //var html = ' <a href="#" onclick="orders_list.getCustomerPhoneAndOpenWhatsAppChat(' + id_order + ');return false;"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['this_path_bo']->value,'htmlall','UTF-8' ));?>
views/img/whatsapp-32x32.png" /> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_whatsappchat']->value,'htmlall','UTF-8' ));?>
</a>';
                //$(this).find("a[href='javascript:window.print()']").append(html);
            });
        } else {
            $(document).ready(function() {
                $('.table.table tbody tr').each(function(){
                    //var html = '<a href="#" onclick="orders_list.getCustomerPhoneAndOpenWhatsAppChat(' + id_order + ');return false;" ' + 'title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'htmlall','UTF-8' ));?>
"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['this_path_bo']->value,'htmlall','UTF-8' ));?>
views/img/whatsapp-green.png" width="16px"/></a>';
                    //$(this).find('td:last').append(html);
                })
            });
        }
    <?php echo '</script'; ?>
>
    
<?php } else { ?>
    
    <?php echo '<script'; ?>
 type="text/javascript">
        var orders_list = {
            init: function() {
                orders_list.createListDropdown();
            },
            createListDropdown: function() {
                var parent = $('table.table.order');
                if (parent.length) {
                    var items = parent.find('tbody tr');
                    if (items.length) {
                        items.each(function(){
                            var last_cell = $(this).find('td:last');
                            var checkbox = $(this).find('td:first input[type=checkbox]');
                            if (checkbox.length > 0) {
                                var id_order = parseInt(checkbox.attr('value'));
                            } else {
                                <?php if (version_compare(@constant('_PS_VERSION_'),'1.6','>=')) {?>
                                var id_order = parseInt($(this).find('td:first').html());
                                <?php } else { ?>
                                var id_order = parseInt($(this).find('td.pointer:first').html());
                                <?php }?>
                            }
                            if (last_cell.length) {
                                <?php if (version_compare(@constant('_PS_VERSION_'),'1.6','<')) {?>
                                    var html = '<a href="#" onclick="orders_list.getCustomerPhoneAndOpenWhatsAppChat(' + id_order + ');return false;" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'htmlall','UTF-8' ));?>
" class="btn btn-default"> <i class="icon-trash"></i> <?php if (version_compare(@constant('_PS_VERSION_'),'1.6','<')) {?><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['this_path_bo']->value,'htmlall','UTF-8' ));?>
views/img/whatsapp-green.png" width="16px"/><?php } else {
echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'htmlall','UTF-8' ));
}?></a>';
                                    <?php if (version_compare(@constant('_PS_VERSION_'),'1.5','<')) {?>
                                        $(this).find('td:last div').append(html);
                                    <?php } elseif (version_compare(@constant('_PS_VERSION_'),'1.6','<')) {?>
                                        $(this).find('td:last').append(html);
                                    <?php }?>
                                <?php } else { ?>
                                    var button_container = last_cell.find('.btn-group'),
                                        button = orders_list.createWhatsAppChatButton(id_order);
                                    if (last_cell.find('.btn-group-action').length) {
                                        button_container.find('ul.dropdown-menu').append($(document.createElement('li')).attr({'class': 'divider'}));
                                        button_container.find('ul.dropdown-menu').append(button);
                                    } else {
                                        button_container.wrap($(document.createElement('div')).addClass('btn-group-action'));
                                        button_container.append(
                                            $(document.createElement('button')).addClass('btn btn-default dropdown-toggle').attr('data-toggle', 'dropdown')
                                                .append($(document.createElement('i')).addClass('icon-caret-down'))
                                        ).append($(document.createElement('ul')).addClass('dropdown-menu').append(button))
                                    }
                                <?php }?>
                            }
                        });
                    }
                }
            },
            createWhatsAppChatButton: function(id_order) {
                return $(document.createElement('li')).append($(document.createElement('a')).attr({'href': '#', 'title':'<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'htmlall','UTF-8' ));?>
', 'onclick': 'orders_list.getCustomerPhoneAndOpenWhatsAppChat(' + id_order + ')'}).html('<i class="icon-whatsapp"></i> ' + orders_list.tr('<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action']->value,'htmlall','UTF-8' ));?>
')));
            },
            tr: function(str) {
                return str;
            },
            getCustomerPhoneAndOpenWhatsAppChat: function(id_order) {
                $.ajax({
                    type: 'POST',
                    url: '<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['whatsappchat_admincontroller']->value,"quotes","UTF-8" ));?>
',
                    async: true,
                    cache: false,
                    dataType : "json",
                    data: 'method=getCustomerMobilePhone&id_order=' + id_order,
                    success: function(jsonData)
                    {
                        if (jsonData.whatsappchat_response.code == 'OK') {
                            window.open(jsonData.whatsappchat_response.url, "sharer", "toolbar=0,status=0,width=660,height=525");
                        } else if (jsonData.whatsappchat_response.code == 'NOK') {
                            alert(jsonData.whatsappchat_response.msg);
                        }
                    },
                    error: function(XMLHttpRequest, textStatus, errorThrown) {
                        console.log(XMLHttpRequest);
                        if (textStatus != 'abort') {
                            alert("TECHNICAL ERROR: unable to open WhatsApp chat window \n\nDetails:\nError thrown: " + XMLHttpRequest + "\n" + 'Text status: ' + textStatus);
                        }
                    }
                });
            },
            openWhatsAppChat: function() {
                window.open("<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['url']->value,'quotes','UTF-8' ));?>
", "sharer", "toolbar=0,status=0,width=660,height=525");
            },
        }
        $(function(){
            orders_list.init();
        });
        if (document.URL.indexOf('id_order') > 0) {
            $(document).ready(function(){
                <?php if ($_smarty_tpl->tpl_vars['show_button']->value !== false) {?>
                    <?php if (version_compare(@constant('_PS_VERSION_'),'1.6','>=')) {?>
                        var toolbar = $('ul#toolbar-nav').prepend('<li><a id="page-header-desc-order-whatsapp" class="toolbar_btn" href="#" onclick="orders_list.openWhatsAppChat();return false;" title="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_whatsappchat']->value,'htmlall','UTF-8' ));?>
"><i class="icon-whatsapp bo"></i><div><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_whatsappchat']->value,'htmlall','UTF-8' ));?>
</div></a></li>');
                    <?php }?>
                    var html = '<a class="btn btn-default" href="#" onclick="orders_list.openWhatsAppChat();return false;" ><i class="icon-whatsapp"></i> <?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_whatsappchat']->value,'htmlall','UTF-8' ));?>
</a>';
                    <?php if (version_compare(@constant('_PS_VERSION_'),'1.5','<')) {?>
                        $("#content div.col-lg-7 .panel:first .hidden-print:first").prepend(html);
                    <?php } elseif (version_compare(@constant('_PS_VERSION_'),'1.6','>=')) {?>
                        $("#content div.col-lg-7 .panel:first .hidden-print:first").prepend(html);
                    <?php } else { ?>
                        var html = '<a class="toolbar_btn" href="#" onclick="orders_list.openWhatsAppChat();return false;" ><span class="icon-whatsapp"><img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['this_path_bo']->value,'htmlall','UTF-8' ));?>
views/img/whatsapp-32x32.png" /></span> <div><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['action_whatsappchat']->value,'htmlall','UTF-8' ));?>
</div></a>';
                        $('ul.cc_button').prepend('<li>' + html + '</li>');
                    <?php }?>
                <?php }?>
            });
        }
    <?php echo '</script'; ?>
>
    
<?php }
}
}
