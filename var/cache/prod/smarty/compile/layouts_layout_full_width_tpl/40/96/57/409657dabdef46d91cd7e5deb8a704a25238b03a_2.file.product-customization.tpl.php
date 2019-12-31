<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:38:15
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/product-customization.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b4f478cb418_41830020',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '409657dabdef46d91cd7e5deb8a704a25238b03a' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/product-customization.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b4f478cb418_41830020 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if (!$_smarty_tpl->tpl_vars['configuration']->value['is_catalog']) {?>
    <div class="product-customization">
        <p class="h4"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Product customization','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>
</p>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Don\'t forget to save your customization to be able to add to cart','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18917384755e0b4f478adc23_46583536', 'product_customization_form');
?>

    </div>
<?php }?>





<?php }
/* {block 'product_customization_form'} */
class Block_18917384755e0b4f478adc23_46583536 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_customization_form' => 
  array (
    0 => 'Block_18917384755e0b4f478adc23_46583536',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <form method="post" action="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['product']->value['url'], ENT_QUOTES, 'UTF-8');?>
" enctype="multipart/form-data">
                <ul class="clearfix">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['customizations']->value['fields'], 'field');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['field']->value) {
?>
                        <li class="product-customization-item">
                            <label> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['label'], ENT_QUOTES, 'UTF-8');?>
</label>
                            <?php if ($_smarty_tpl->tpl_vars['field']->value['type'] == 'text') {?>
                                <textarea placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your message here','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
"
                                          class="form-control product-message"
                                          maxlength="250" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required <?php }?>
                                          name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
"><?php if ($_smarty_tpl->tpl_vars['field']->value['text'] !== '') {
echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');
}?></textarea>
                                <div class="clearfix"><?php if (!$_smarty_tpl->tpl_vars['field']->value['required']) {?>
                                        <small class="pull-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small><?php }?>
                                    <small class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'250 char. max','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small>
                                 
                                </div>
                                   <?php if ($_smarty_tpl->tpl_vars['field']->value['text'] !== '') {?>
                                       <div class="clearfix mt-3"> <h6 class="customization-message float-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Your customization:','d'=>'Shop.Theme.Catalog'),$_smarty_tpl ) );?>

                                            <label><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['text'], ENT_QUOTES, 'UTF-8');?>
</label>
                                        </h6></div>
                                    <?php }?>
                            <?php } elseif ($_smarty_tpl->tpl_vars['field']->value['type'] == 'image') {?>
                                <input class="filestyle file-input js-file-input" <?php if ($_smarty_tpl->tpl_vars['field']->value['required']) {?> required <?php }?>
                                       type="file" name="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['input_name'], ENT_QUOTES, 'UTF-8');?>
" data-buttontext="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Choose file','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
">
                                <div class="clearfix"><?php if (!$_smarty_tpl->tpl_vars['field']->value['required']) {?>
                                    <small class="pull-left"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'optional','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small><?php }?>
                                <small class="pull-right"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'.png .jpg .gif','d'=>'Shop.Forms.Help'),$_smarty_tpl ) );?>
</small>
                                </div>

                                <?php if ($_smarty_tpl->tpl_vars['field']->value['is_customized']) {?>
                                    <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['image']['small']['url'], ENT_QUOTES, 'UTF-8');?>
">
                                    <a class="remove-image" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['field']->value['remove_image_url'], ENT_QUOTES, 'UTF-8');?>
" rel="nofollow"><i
                                                class="fa fa-trash-o" aria-hidden="true"></i></a>
                                <?php }?>
                            <?php }?>
                        </li>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
                <div class="clearfix mt-2">
                    <button class="btn btn-secondary btn-block" type="submit"
                            name="submitCustomizedData"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Save Customization','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>
</button>
                </div>
            </form>
        <?php
}
}
/* {/block 'product_customization_form'} */
}
