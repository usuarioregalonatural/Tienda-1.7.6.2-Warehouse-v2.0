<?php
/* Smarty version 3.1.33, created on 2020-01-02 12:00:36
  from '/var/www/html/themes/warehouse/templates/_partials/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dcd544691d3_98923145',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f543cf2280bbae110d7d8e533fd3790316b7275c' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/header.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_elements/social-links.tpl' => 1,
    'file:_partials/_variants/header-1.tpl' => 1,
    'file:_partials/_variants/header-2.tpl' => 1,
    'file:_partials/_variants/header-3.tpl' => 1,
    'file:_partials/_variants/header-4.tpl' => 1,
    'file:_partials/_variants/header-5.tpl' => 1,
    'file:_partials/_variants/header-6.tpl' => 1,
    'file:_partials/_variants/header-7.tpl' => 1,
    'file:_partials/_variants/mobile-header-1.tpl' => 1,
    'file:_partials/_variants/mobile-header-2.tpl' => 1,
    'file:_partials/_variants/mobile-header-3.tpl' => 1,
  ),
),false)) {
function content_5e0dcd544691d3_98923145 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4856513555e0dcd54458946_59762438', 'header_banner');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21212176225e0dcd544597b4_23044695', 'header_nav');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16728611135e0dcd5445df71_14692124', 'header_desktop');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5910933615e0dcd544656c7_48425762', 'header_mobile');
?>

<?php }
/* {block 'header_banner'} */
class Block_4856513555e0dcd54458946_59762438 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_banner' => 
  array (
    0 => 'Block_4856513555e0dcd54458946_59762438',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <div class="header-banner">
    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBanner'),$_smarty_tpl ) );?>

  </div>
<?php
}
}
/* {/block 'header_banner'} */
/* {block 'header_nav'} */
class Block_21212176225e0dcd544597b4_23044695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_nav' => 
  array (
    0 => 'Block_21212176225e0dcd544597b4_23044695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['tb_width'] == 'fullwidth') {?>
        <nav class="header-nav">
        <div class="container">
    <?php } else { ?>
        <div class="container">
        <nav class="header-nav">
    <?php }?>

        <div class="row justify-content-between">
            <div class="col col-auto col-md left-nav">
                <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['tb_social'] == 1) {?> <div class="d-inline-block"> <?php $_smarty_tpl->_subTemplateRender('file:_elements/social-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'_topbar'), 0, false);
?> </div> <?php }?>
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav1'),$_smarty_tpl ) );?>

            </div>
            <div class="col col-auto center-nav text-center">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNavCenter'),$_smarty_tpl ) );?>

             </div>
            <div class="col col-auto col-md right-nav text-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayNav2'),$_smarty_tpl ) );?>

             </div>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['tb_width'] == 'fullwidth') {?>
                </div>
            </nav>
        <?php } else { ?>
                </nav>
            </div>
        <?php }
}
}
/* {/block 'header_nav'} */
/* {block 'header_desktop'} */
class Block_16728611135e0dcd5445df71_14692124 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_desktop' => 
  array (
    0 => 'Block_16728611135e0dcd5445df71_14692124',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id="desktop-header" class="desktop-header-style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 1) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 2) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 3) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 4) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 5) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 6) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-6.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] == 7) {?>
        <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/header-7.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php }?>
</div>
<?php
}
}
/* {/block 'header_desktop'} */
/* {block 'header_mobile'} */
class Block_5910933615e0dcd544656c7_48425762 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header_mobile' => 
  array (
    0 => 'Block_5910933615e0dcd544656c7_48425762',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <div id="mobile-header" class="mobile-header-style-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_header'], ENT_QUOTES, 'UTF-8');?>
">
        <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_header'] == 1) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/mobile-header-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_header'] == 2) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/mobile-header-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php } elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_header'] == 3) {?>
            <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/mobile-header-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'header_mobile'} */
}
