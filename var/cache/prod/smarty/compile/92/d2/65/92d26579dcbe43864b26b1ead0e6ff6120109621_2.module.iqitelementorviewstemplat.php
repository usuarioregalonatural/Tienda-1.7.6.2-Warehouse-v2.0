<?php
/* Smarty version 3.1.33, created on 2020-01-04 12:34:49
  from 'module:iqitelementorviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e107859edd661_90540170',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '92d26579dcbe43864b26b1ead0e6ff6120109621' => 
    array (
      0 => 'module:iqitelementorviewstemplat',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e107859edd661_90540170 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1481225605e107859edc289_56587685', 'iqitelementor');
?>

<?php }
/* {block 'iqitelementor'} */
class Block_1481225605e107859edc289_56587685 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'iqitelementor' => 
  array (
    0 => 'Block_1481225605e107859edc289_56587685',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

<?php
}
}
/* {/block 'iqitelementor'} */
}
