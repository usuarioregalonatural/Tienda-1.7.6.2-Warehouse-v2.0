<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:05:46
  from '/var/www/html/modules/iqitsizecharts/views/templates/admin/_configure/helpers/form/form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b47aa3c5a00_31540628',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd574e2d03c20a666731630646a2322208ba9083a' => 
    array (
      0 => '/var/www/html/modules/iqitsizecharts/views/templates/admin/_configure/helpers/form/form.tpl',
      1 => 1577795555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b47aa3c5a00_31540628 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7335595805e0b47aa3aba35_38523028', "autoload_tinyMCE");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16990075425e0b47aa3ae421_97718241', "input");
?>




<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/form/form.tpl");
}
/* {block "autoload_tinyMCE"} */
class Block_7335595805e0b47aa3aba35_38523028 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'autoload_tinyMCE' => 
  array (
    0 => 'Block_7335595805e0b47aa3aba35_38523028',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    tinySetup({
    editor_selector :"autoload_rte",
    content_css : "<?php echo $_smarty_tpl->tpl_vars['module_path']->value;?>
views/css/tinymce.css"
    });
<?php
}
}
/* {/block "autoload_tinyMCE"} */
/* {block "input"} */
class Block_16990075425e0b47aa3ae421_97718241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'input' => 
  array (
    0 => 'Block_16990075425e0b47aa3ae421_97718241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


    <?php if ($_smarty_tpl->tpl_vars['input']->value['type'] == 'table_generator') {?>
        <div class="form-group">
            <div class="col-lg-9"><input type="number" min="1" value="1" step="1" name="nrows"
                                         class="nrows form-control"
                                         placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'no of rows','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
"></div>
        </div>
        <div class="form-group">
            <div class="col-lg-9"><input type="number" min="1" value="1" step="1" name="ncol" class="ncol form-control"
                                         placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'no of columns','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
"></div>
        </div>
        <div class="form-group" style="margin-left: 20px;">
            <div class="col-lg-9">
                <label class="checkbox">
                    <input type="checkbox" name="header_row" value="header_row"
                           class="header_row"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Header row (it will add extra heading column)','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>

                </label>
                <label class="checkbox">
                    <input type="checkbox" name="bordered" value="bordered" class="table_bordered"
                           checked> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Bordered','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>

                </label>
                <label class="checkbox">
                    <input type="checkbox" name="striped" value="striped"
                           class="table_striped"> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Striped','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>

                </label>
            </div>
        </div>
        <button type="button" class="btn btn-success" name="Submit"
                id="table_generator"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Generate table','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
</button>
        <div class="span6" id="tbl_display">
        </div>
        <?php } elseif ($_smarty_tpl->tpl_vars['input']->value['type'] == 'attribute_checboxes') {?>
        <?php if (isset($_smarty_tpl->tpl_vars['input']->value['options']['query'])) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['input']->value['options']['query'], 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
                <div class="checkbox <?php if (isset($_smarty_tpl->tpl_vars['input']->value['class'])) {
echo $_smarty_tpl->tpl_vars['input']->value['class'];
}?>">
                    <label><input type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['input']->value['name'];?>
[]" id="<?php echo $_smarty_tpl->tpl_vars['value']->value['id_option'];?>
"value="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['value']->value['id_option'],'html','UTF-8' ));?>
" <?php if (isset($_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {
if (in_array($_smarty_tpl->tpl_vars['value']->value['id_option'],$_smarty_tpl->tpl_vars['fields_value']->value[$_smarty_tpl->tpl_vars['input']->value['name']])) {?>  checked="checked"<?php }
}?> /><?php echo $_smarty_tpl->tpl_vars['value']->value['name'];?>
</label>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>

        <?php if (isset($_smarty_tpl->tpl_vars['value']->value['p']) && $_smarty_tpl->tpl_vars['value']->value['p']) {?><p class="help-block"><?php echo $_smarty_tpl->tpl_vars['value']->value['p'];?>
</p><?php }?>
    <?php } else { ?>
        <?php 
$_smarty_tpl->inheritance->callParent($_smarty_tpl, $this, '{$smarty.block.parent}');
?>

    <?php }
}
}
/* {/block "input"} */
}
