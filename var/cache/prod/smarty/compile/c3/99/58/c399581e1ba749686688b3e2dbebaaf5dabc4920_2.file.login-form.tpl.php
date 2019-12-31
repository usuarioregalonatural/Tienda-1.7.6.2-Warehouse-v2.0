<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:45:53
  from '/var/www/html/themes/warehouse/templates/checkout/_partials/login-form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b51117cd578_50887867',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c399581e1ba749686688b3e2dbebaaf5dabc4920' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/checkout/_partials/login-form.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b51117cd578_50887867 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19951296115e0b51117c73c5_14303458', 'login_form_start');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5698392725e0b51117cb061_52946041', 'form_buttons');
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18827211695e0b51117ccad5_27260210', 'login_form_end');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'customer/_partials/login-form.tpl');
}
/* {block 'login_form_start'} */
class Block_19951296115e0b51117c73c5_14303458 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form_start' => 
  array (
    0 => 'Block_19951296115e0b51117c73c5_14303458',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="collapse <?php if (count($_smarty_tpl->tpl_vars['errors']->value[''])) {?>show<?php }?>" id="personal-information-step-login">
<?php
}
}
/* {/block 'login_form_start'} */
/* {block 'form_buttons'} */
class Block_5698392725e0b51117cb061_52946041 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'form_buttons' => 
  array (
    0 => 'Block_5698392725e0b51117cb061_52946041',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <button
    class="continue btn btn-primary btn-block btn-lg"
    name="continue"
    data-link-action="sign-in"
    type="submit"
    value="1"
  >
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign in','d'=>'Shop.Theme.Actions'),$_smarty_tpl ) );?>

  </button>
<?php
}
}
/* {/block 'form_buttons'} */
/* {block 'login_form_end'} */
class Block_18827211695e0b51117ccad5_27260210 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'login_form_end' => 
  array (
    0 => 'Block_18827211695e0b51117ccad5_27260210',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

</div>
    <?php
}
}
/* {/block 'login_form_end'} */
}
