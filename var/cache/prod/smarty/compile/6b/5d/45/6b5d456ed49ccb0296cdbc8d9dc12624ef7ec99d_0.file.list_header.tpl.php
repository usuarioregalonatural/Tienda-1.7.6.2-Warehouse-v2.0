<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:47:05
  from '/var/www/html/admin786icvj8i/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b4349c0fa83_86685464',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b5d456ed49ccb0296cdbc8d9dc12624ef7ec99d' => 
    array (
      0 => '/var/www/html/admin786icvj8i/themes/default/template/controllers/attributes_groups/helpers/list/list_header.tpl',
      1 => 1577795553,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b4349c0fa83_86685464 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14054297985e0b4349c0e569_49917186', 'leadin');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, "helpers/list/list_header.tpl");
}
/* {block 'leadin'} */
class Block_14054297985e0b4349c0e569_49917186 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'leadin' => 
  array (
    0 => 'Block_14054297985e0b4349c0e569_49917186',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

	<?php echo '<script'; ?>
 type="text/javascript">
		$(document).ready(function() {
			$(location.hash).click();
		});
	<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'leadin'} */
}
