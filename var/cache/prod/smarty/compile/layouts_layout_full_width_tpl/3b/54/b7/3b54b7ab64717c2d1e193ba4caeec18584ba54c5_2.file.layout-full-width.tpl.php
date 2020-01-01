<?php
/* Smarty version 3.1.33, created on 2019-12-31 19:50:36
  from '/var/www/html/themes/warehouse/templates/layouts/layout-full-width.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b987c3af803_54812032',
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
function content_5e0b987c3af803_54812032 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16667130145e0b987c3ab8a8_39492437', 'left_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8335217235e0b987c3ac0b8_92373954', 'right_column');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3784749455e0b987c3aca98_79661618', "layout_row_start");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9401459245e0b987c3ad3f1_77755128', "layout_row_end");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18343075715e0b987c3adba7_21451712', 'content_wrapper');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'layouts/layout-both-columns.tpl');
}
/* {block 'left_column'} */
class Block_16667130145e0b987c3ab8a8_39492437 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_16667130145e0b987c3ab8a8_39492437',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'left_column'} */
/* {block 'right_column'} */
class Block_8335217235e0b987c3ac0b8_92373954 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_8335217235e0b987c3ac0b8_92373954',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'right_column'} */
/* {block "layout_row_start"} */
class Block_3784749455e0b987c3aca98_79661618 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_start' => 
  array (
    0 => 'Block_3784749455e0b987c3aca98_79661618',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "layout_row_start"} */
/* {block "layout_row_end"} */
class Block_9401459245e0b987c3ad3f1_77755128 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_end' => 
  array (
    0 => 'Block_9401459245e0b987c3ad3f1_77755128',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "layout_row_end"} */
/* {block 'content'} */
class Block_16340373565e0b987c3ae7a3_32993678 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <p>Hello world! This is HTML5 Boilerplate.</p>
        <?php
}
}
/* {/block 'content'} */
/* {block 'content_wrapper'} */
class Block_18343075715e0b987c3adba7_21451712 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_18343075715e0b987c3adba7_21451712',
  ),
  'content' => 
  array (
    0 => 'Block_16340373565e0b987c3ae7a3_32993678',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="content-wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16340373565e0b987c3ae7a3_32993678', 'content', $this->tplIndex);
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

    </div>
<?php
}
}
/* {/block 'content_wrapper'} */
}
