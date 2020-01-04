<?php
/* Smarty version 3.1.33, created on 2020-01-04 20:46:42
  from '/var/www/html/themes/warehouse/templates/_partials/_variants/footer-3.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e10eba251d590_83136857',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8efac285ce7ffa2f83bfb953e0a50c6f4ac991b3' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/_variants/footer-3.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/_variants/footer-copyrights-2.tpl' => 1,
  ),
),false)) {
function content_5e10eba251d590_83136857 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_newsletter_status'] == 1) {?>
<div id="footer-container-first" class="footer-container footer-style-3">
  <div class="container">
    <div class="row align-items-center">


      <div class="col block-newsletter">
        <h5><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Sign up to newsletter','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
</h5>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['widget'][0], array( array('name'=>"ps_emailsubscription",'hook'=>'displayFooter'),$_smarty_tpl ) );?>

      </div>


    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7609939075e10eba251a693_82380741', 'hook_footer_before');
?>

    </div>
  </div>
</div>
<?php }?>

<div id="footer-container-main" class="footer-container footer-style-3">
  <div class="container">
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11967774785e10eba251b6b1_00347866', 'hook_footer');
?>

    </div>
    <div class="row">
      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19878360585e10eba251c461_69791308', 'hook_footer_after');
?>

    </div>
  </div>
</div>
<?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-copyrights-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block 'hook_footer_before'} */
class Block_7609939075e10eba251a693_82380741 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_before' => 
  array (
    0 => 'Block_7609939075e10eba251a693_82380741',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterBefore'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_before'} */
/* {block 'hook_footer'} */
class Block_11967774785e10eba251b6b1_00347866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer' => 
  array (
    0 => 'Block_11967774785e10eba251b6b1_00347866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer'} */
/* {block 'hook_footer_after'} */
class Block_19878360585e10eba251c461_69791308 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_footer_after' => 
  array (
    0 => 'Block_19878360585e10eba251c461_69791308',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayFooterAfter'),$_smarty_tpl ) );?>

      <?php
}
}
/* {/block 'hook_footer_after'} */
}
