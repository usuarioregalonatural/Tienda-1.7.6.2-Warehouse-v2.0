<?php
/* Smarty version 3.1.33, created on 2020-01-04 20:46:42
  from '/var/www/html/themes/warehouse/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e10eba22cb589_78822576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3b54b7ab64717c2d1e193ba4caeec18584ba54c5' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/layouts/layout-full-width.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e10eba22cb589_78822576 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_97729325e10eba22c60d5_68732969', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276075905e10eba22c7179_28792291', 'right_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5745704515e10eba22c8160_60811112', "layout_row_start");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2836556955e10eba22c8b48_54323664', "layout_row_end");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18268298975e10eba22c92f2_06420241', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_97729325e10eba22c60d5_68732969 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_97729325e10eba22c60d5_68732969',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_276075905e10eba22c7179_28792291 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_276075905e10eba22c7179_28792291',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block "layout_row_start"} */
class Block_5745704515e10eba22c8160_60811112 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_start' => 
  array (
    0 => 'Block_5745704515e10eba22c8160_60811112',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "layout_row_start"} */
/* {block "layout_row_end"} */
class Block_2836556955e10eba22c8b48_54323664 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_end' => 
  array (
    0 => 'Block_2836556955e10eba22c8b48_54323664',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "layout_row_end"} */
/* {block 'content'} */
class Block_9010998735e10eba22ca4c3_35891132 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_18268298975e10eba22c92f2_06420241 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_18268298975e10eba22c92f2_06420241',
  ),
  'content' => 
  array (
    0 => 'Block_9010998735e10eba22ca4c3_35891132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9010998735e10eba22ca4c3_35891132', 'content', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
