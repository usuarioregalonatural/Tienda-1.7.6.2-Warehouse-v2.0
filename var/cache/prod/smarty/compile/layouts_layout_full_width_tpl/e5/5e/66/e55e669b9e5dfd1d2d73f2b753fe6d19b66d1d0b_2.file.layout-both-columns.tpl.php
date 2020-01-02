<?php
/* Smarty version 3.1.33, created on 2020-01-02 13:34:35
  from '/var/www/html/themes/warehouse/templates/layouts/layout-both-columns.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0de35b44f0c5_88423202',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e55e669b9e5dfd1d2d73f2b753fe6d19b66d1d0b' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/layouts/layout-both-columns.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/head.tpl' => 1,
    'file:catalog/_partials/product-activation.tpl' => 1,
    'file:_partials/header.tpl' => 1,
    'file:_partials/breadcrumb.tpl' => 1,
    'file:_partials/notifications.tpl' => 1,
    'file:_partials/footer.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5e0de35b44f0c5_88423202 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!doctype html>
<html lang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['language']->value['iso_code'], ENT_QUOTES, 'UTF-8');?>
">

<head>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14041471235e0de35b420e75_87727456', 'head');
?>

    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head']) {?> <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_head'];?>
 <?php }?>
</head>

<body id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page_name'], ENT_QUOTES, 'UTF-8');?>
" class="<?php echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( $_smarty_tpl->tpl_vars['page']->value['body_classes'] )), ENT_QUOTES, 'UTF-8');?>
 body-desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17887948295e0de35b427ba6_57293003', 'hook_after_body_opening_tag');
?>


<main id="main-page-content" <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader'] == "pre" && isset($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'])) {?>style="opacity: 0;"<?php }?> >
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7816700665e0de35b42b929_77903332', 'product_activation');
?>


    <header id="header" class="desktop-header-style-w-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'], ENT_QUOTES, 'UTF-8');?>
">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16904544035e0de35b42dc57_32727717', 'header');
?>

    </header>

    <section id="wrapper">
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTop"),$_smarty_tpl ) );?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/breadcrumb.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

        <div id="inner-wrapper" class="container">
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperTopInContainer"),$_smarty_tpl ) );?>

            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_682237195e0de35b4319a1_61044470', 'notifications');
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16328667295e0de35b433449_50896773', "layout_row_start");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18844423195e0de35b4345c6_77314985', "content_wrapper");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20267425755e0de35b4393c1_40835803', "left_column");
?>


                <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17391155325e0de35b43f3a6_48320175', "right_column");
?>


            <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21039477025e0de35b442116_73225440', "layout_row_end");
?>

            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottomInContainer"),$_smarty_tpl ) );?>

        </div>
        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayWrapperBottom"),$_smarty_tpl ) );?>

    </section>

    <footer id="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5736671315e0de35b4446a0_10182638', "footer");
?>

    </footer>

</main>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14143464965e0de35b445f65_78290283', 'javascript_bottom');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17039916205e0de35b447f91_86403519', 'hook_before_body_closing_tag');
?>


<button id="back-to-top">
    <i class="fa fa-angle-up" aria-hidden="true"></i>
</button>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader'] == "pre" && isset($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'])) {?>
    <div id="page-preloader" style="">
        <div class="loader-wrapper">
            <div class="loader loader-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['op_preloader_icon_pre'], ENT_QUOTES, 'UTF-8');?>
"></div>
        </div>
    </div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body']) {?> <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['codes_body'];?>
 <?php }?>

</body>

</html>
<?php }
/* {block 'head'} */
class Block_14041471235e0de35b420e75_87727456 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head' => 
  array (
    0 => 'Block_14041471235e0de35b420e75_87727456',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:_partials/head.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'head'} */
/* {block 'hook_after_body_opening_tag'} */
class Block_17887948295e0de35b427ba6_57293003 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_after_body_opening_tag' => 
  array (
    0 => 'Block_17887948295e0de35b427ba6_57293003',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayAfterBodyOpeningTag'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_after_body_opening_tag'} */
/* {block 'product_activation'} */
class Block_7816700665e0de35b42b929_77903332 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'product_activation' => 
  array (
    0 => 'Block_7816700665e0de35b42b929_77903332',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/product-activation.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php
}
}
/* {/block 'product_activation'} */
/* {block 'header'} */
class Block_16904544035e0de35b42dc57_32727717 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_16904544035e0de35b42dc57_32727717',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender('file:_partials/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block 'header'} */
/* {block 'notifications'} */
class Block_682237195e0de35b4319a1_61044470 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'notifications' => 
  array (
    0 => 'Block_682237195e0de35b4319a1_61044470',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <?php $_smarty_tpl->_subTemplateRender('file:_partials/notifications.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            <?php
}
}
/* {/block 'notifications'} */
/* {block "layout_row_start"} */
class Block_16328667295e0de35b433449_50896773 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_start' => 
  array (
    0 => 'Block_16328667295e0de35b433449_50896773',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                <div class="row">
            <?php
}
}
/* {/block "layout_row_start"} */
/* {block "content"} */
class Block_15880560925e0de35b437071_21309994 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                            <p>Hello world! This is HTML5 Boilerplate.</p>
                        <?php
}
}
/* {/block "content"} */
/* {block "content_wrapper"} */
class Block_18844423195e0de35b4345c6_77314985 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content_wrapper' => 
  array (
    0 => 'Block_18844423195e0de35b4345c6_77314985',
  ),
  'content' => 
  array (
    0 => 'Block_15880560925e0de35b437071_21309994',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="content-wrapper" class="left-column right-column col-12 col-md-6 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-8<?php }?>">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperTop"),$_smarty_tpl ) );?>

                        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_15880560925e0de35b437071_21309994', "content", $this->tplIndex);
?>

                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayContentWrapperBottom"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block "content_wrapper"} */
/* {block "left_column"} */
class Block_20267425755e0de35b4393c1_40835803 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'left_column' => 
  array (
    0 => 'Block_20267425755e0de35b4393c1_40835803',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                        <div id="left-column" class="col-12 col-md-3 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-2<?php }?> order-first">
                            <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] != 6 && $_smarty_tpl->tpl_vars['iqitTheme']->value['h_layout'] != 7) {
echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayVerticalMenu"),$_smarty_tpl ) );
}?>
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayLeftColumn"),$_smarty_tpl ) );?>

                        </div>
                <?php
}
}
/* {/block "left_column"} */
/* {block "right_column"} */
class Block_17391155325e0de35b43f3a6_48320175 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'right_column' => 
  array (
    0 => 'Block_17391155325e0de35b43f3a6_48320175',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                    <div id="right-column" class="col-12 col-md-3 <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['g_sidebars_width'] == 'narrow') {?>col-lg-2<?php }?>">
                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>"displayRightColumn"),$_smarty_tpl ) );?>

                    </div>
                <?php
}
}
/* {/block "right_column"} */
/* {block "layout_row_end"} */
class Block_21039477025e0de35b442116_73225440 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'layout_row_end' => 
  array (
    0 => 'Block_21039477025e0de35b442116_73225440',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

                </div>
            <?php
}
}
/* {/block "layout_row_end"} */
/* {block "footer"} */
class Block_5736671315e0de35b4446a0_10182638 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_5736671315e0de35b4446a0_10182638',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php $_smarty_tpl->_subTemplateRender("file:_partials/footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
        <?php
}
}
/* {/block "footer"} */
/* {block 'javascript_bottom'} */
class Block_14143464965e0de35b445f65_78290283 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_bottom' => 
  array (
    0 => 'Block_14143464965e0de35b445f65_78290283',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['bottom']), 0, false);
}
}
/* {/block 'javascript_bottom'} */
/* {block 'hook_before_body_closing_tag'} */
class Block_17039916205e0de35b447f91_86403519 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_before_body_closing_tag' => 
  array (
    0 => 'Block_17039916205e0de35b447f91_86403519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['hook'][0], array( array('h'=>'displayBeforeBodyClosingTag'),$_smarty_tpl ) );?>

<?php
}
}
/* {/block 'hook_before_body_closing_tag'} */
}
