<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:45:45
  from '/var/www/html/themes/warehouse/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b42f9312770_00319607',
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
function content_5e0b42f9312770_00319607 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15866109405e0b42f930d336_34459238', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4601482005e0b42f930ddd5_72850106', 'right_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1358859015e0b42f930eaf5_89072869', "layout_row_start");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11375816285e0b42f930f760_15843432', "layout_row_end");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21210460465e0b42f9310195_22276113', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_15866109405e0b42f930d336_34459238 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_15866109405e0b42f930d336_34459238',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_4601482005e0b42f930ddd5_72850106 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_4601482005e0b42f930ddd5_72850106',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block "layout_row_start"} */
class Block_1358859015e0b42f930eaf5_89072869 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_start' => 
  array (
    0 => 'Block_1358859015e0b42f930eaf5_89072869',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "layout_row_start"} */
/* {block "layout_row_end"} */
class Block_11375816285e0b42f930f760_15843432 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_end' => 
  array (
    0 => 'Block_11375816285e0b42f930f760_15843432',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "layout_row_end"} */
/* {block 'content'} */
class Block_3555013375e0b42f93111b8_34967241 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_21210460465e0b42f9310195_22276113 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_21210460465e0b42f9310195_22276113',
  ),
  'content' => 
  array (
    0 => 'Block_3555013375e0b42f93111b8_34967241',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3555013375e0b42f93111b8_34967241', 'content', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
