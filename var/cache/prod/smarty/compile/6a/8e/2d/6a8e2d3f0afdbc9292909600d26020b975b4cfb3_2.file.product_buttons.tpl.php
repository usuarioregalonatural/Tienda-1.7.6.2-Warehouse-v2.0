<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:42:24
  from '/var/www/html/modules/an_productfields/views/templates/hook/product_buttons.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b5040e2cef2_88151891',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8e2d3f0afdbc9292909600d26020b975b4cfb3' => 
    array (
      0 => '/var/www/html/modules/an_productfields/views/templates/hook/product_buttons.tpl',
      1 => 1577795554,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b5040e2cef2_88151891 (Smarty_Internal_Template $_smarty_tpl) {
if (count($_smarty_tpl->tpl_vars['an_attributes']->value)) {?>
    <div id="an_productfields" class="an_productfields">
        <input type="hidden" name="an_productfields" value="1"/>
        <?php if ($_smarty_tpl->tpl_vars['an_pf_header_text']->value != '') {?>
            <h3 class="page-heading"<?php if (!$_smarty_tpl->tpl_vars['an_new']->value) {?> style="text-transform: none;"<?php }?>>
                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['an_pf_header_text']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            </h3>
        <?php }?>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['an_attributes']->value, 'attribute');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['attribute']->value) {
?>
            <?php $_smarty_tpl->_assignInScope('input_name', ('an_productfields_').($_smarty_tpl->tpl_vars['attribute']->value->id));?>
            <div id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="form-group <?php if ($_smarty_tpl->tpl_vars['attribute']->value->required == 1) {?>required <?php }
if ($_smarty_tpl->tpl_vars['attribute']->value->type == 'radio') {?> <?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->type == 'textarea') {?> textarea<?php } elseif (($_smarty_tpl->tpl_vars['attribute']->value->type == 'multiselect' || $_smarty_tpl->tpl_vars['attribute']->value->type == 'dropdown')) {?>select<?php } else { ?>text<?php }?>">
                <?php if ($_smarty_tpl->tpl_vars['attribute']->value->type == 'radio' || $_smarty_tpl->tpl_vars['attribute']->value->type == 'checkbox') {?>
                    <label><?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['attribute']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['attribute']->value->required == 1) {?><sup style="color: red;">*</sup><?php }?>
                    </label>

                <?php } else { ?>
                    <label for="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" class="label-title">
                        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['attribute']->value->name,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');
if ($_smarty_tpl->tpl_vars['attribute']->value->required == 1) {?><sup style="color: red;">*</sup><?php }?>
                    </label>
                <?php }?>
                <?php if ($_smarty_tpl->tpl_vars['attribute']->value->price != 0) {?>(+<?php echo htmlspecialchars(Tools::displayPrice(Tools::convertPrice($_smarty_tpl->tpl_vars['attribute']->value->price)), ENT_QUOTES, 'UTF-8');?>
)<?php }?>
                <?php if ($_smarty_tpl->tpl_vars['attribute']->value->type == 'text') {?>
                    <input type="text" class="text form-control an_pf_text" id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                           name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                           placeholder="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['attribute']->value->placeholder,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if (intval($_smarty_tpl->tpl_vars['attribute']->value->max_text_length) != 0) {?>
                                maxlength="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['attribute']->value->max_text_length), ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?> value=""
                           data-pricemain="<?php if ($_smarty_tpl->tpl_vars['attribute']->value->price != 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->price, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>"
                    >
                    <div class="symbol_counter" id="counter_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></div>
                <?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->type == 'textarea') {?>
                    <textarea name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                            <?php if (intval($_smarty_tpl->tpl_vars['attribute']->value->max_text_length) != 0) {?>
                                maxlength="<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['attribute']->value->max_text_length), ENT_QUOTES, 'UTF-8');?>
"
                            <?php }?>
                              class="form-control an_pf_textarea"
                              data-pricemain="<?php if ($_smarty_tpl->tpl_vars['attribute']->value->price != 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->price, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>"
                    ></textarea>
                    <div class="symbol_counter" id="counter_<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"></div>
                <?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->type == 'date') {?>
                    <input type="text" class="text an_date form-control"
                           id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                           value=""
                           data-pricemain="<?php if ($_smarty_tpl->tpl_vars['attribute']->value->price != 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->price, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>"
                    >
                    <!--                     <style>
                                            div#ui-datepicker-div {
                                                z-index: 9999 !important;
                                            }
                                        </style> -->
                <?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->type == 'radio') {?>
                    <div class="clearfix">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute']->value->getValues(), 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <div  class="radio-inline an_radio" <?php if (!$_smarty_tpl->tpl_vars['an_new']->value) {?>style="display: block;"<?php } else { ?>style="display: inline-block;"<?php }?>>
                                <label class="top"style="min-width: 7px">
                                    <input type="radio" name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                           id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id']->value), ENT_QUOTES, 'UTF-8');?>
"
                                           value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"                                           class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                           data-price="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->getPriceFromValue($_smarty_tpl->tpl_vars['value']->value,false),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                           data-pricemain="<?php if ($_smarty_tpl->tpl_vars['attribute']->value->price != 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->price, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>"
                                           class="form-control">
                                    <div class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"> <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->cleanFromPrice($_smarty_tpl->tpl_vars['value']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                        <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->getPriceFromValue($_smarty_tpl->tpl_vars['value']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
</div>
                                </label>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->type == 'checkbox') {?>
                    <div class="clearfix">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute']->value->getValues(), 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <div class="radio-inline an_radio" <?php if (!$_smarty_tpl->tpl_vars['an_new']->value) {?>style="display: block;"<?php } else { ?>style="display: inline-block;"<?php }?>>
                                <label class="top" style="min-width: 7px">
                                    <input type="checkbox" name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
[]"
                                           id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
_<?php echo htmlspecialchars(intval($_smarty_tpl->tpl_vars['id']->value), ENT_QUOTES, 'UTF-8');?>
"
                                           value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"                                           class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                           data-price="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->getPriceFromValue($_smarty_tpl->tpl_vars['value']->value,false),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                           data-pricemain="<?php if ($_smarty_tpl->tpl_vars['attribute']->value->price != 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->price, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>"
                                           class="form-control">
                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->cleanFromPrice($_smarty_tpl->tpl_vars['value']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                    <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->getPriceFromValue($_smarty_tpl->tpl_vars['value']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                </label>
                            </div>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </div>
                <?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->type == 'multiselect') {?>
                    <select name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
[]" id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                            multiple="multiple" size="<?php echo htmlspecialchars(count($_smarty_tpl->tpl_vars['attribute']->value->getValues()), ENT_QUOTES, 'UTF-8');?>
" style="width: 372px;" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute']->value->getValues(), 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <option                                     value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                    class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                    data-price="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->getPriceFromValue($_smarty_tpl->tpl_vars['value']->value,false),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                    data-pricemain="<?php if ($_smarty_tpl->tpl_vars['attribute']->value->price != 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->price, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>"
                            >
                                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->cleanFromPrice($_smarty_tpl->tpl_vars['value']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->getPriceFromValue($_smarty_tpl->tpl_vars['value']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->type == 'dropdown') {?>
                    <select name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
" id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                            style="width: 372px;" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['attribute']->value->getValues(), 'value', false, 'id');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['id']->value => $_smarty_tpl->tpl_vars['value']->value) {
?>
                            <option                                     value="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                    class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                    data-price="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->getPriceFromValue($_smarty_tpl->tpl_vars['value']->value,false),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                                    data-pricemain="<?php if ($_smarty_tpl->tpl_vars['attribute']->value->price != 0) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->price, ENT_QUOTES, 'UTF-8');
} else { ?>0<?php }?>"
                            >
                                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->cleanFromPrice($_smarty_tpl->tpl_vars['value']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                                <?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( Module::getInstanceByName('an_productfields')->getPriceFromValue($_smarty_tpl->tpl_vars['value']->value),'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>

                            </option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                <?php } elseif ($_smarty_tpl->tpl_vars['attribute']->value->type == 'image') {?>
                    <input type="file" class="text form-control image" name="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"
                           id="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['input_name']->value,'htmlall','UTF-8' )), ENT_QUOTES, 'UTF-8');?>
"/>
                <?php }?>
            </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
    <?php echo '<script'; ?>
>
        
        var an_translator = {
            
            error_title: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Oops...','mod'=>'an_productfields','js'=>1),$_smarty_tpl ) );?>
',
            error_content: '<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Please fill the required fields.','mod'=>'an_productfields','js'=>1),$_smarty_tpl ) );?>
'
            
        };
        
    <?php echo '</script'; ?>
>
<?php }
if (!$_smarty_tpl->tpl_vars['an_new']->value) {?>
    <style>
        #an_productfields .form-group, #an_productfields .page-heading{
            margin: 10px;
        }
        .an_radio{
            margin-left: 0px !important;
            float:none !important;
        }
    </style>
<?php }
}
}
