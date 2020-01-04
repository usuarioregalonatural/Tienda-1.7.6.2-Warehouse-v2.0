<?php
/* Smarty version 3.1.33, created on 2020-01-04 20:46:42
  from '/var/www/html/themes/warehouse/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e10eba22c3582_87470634',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b29e289d2feba2985dab8897183db1164dd75d04' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/page.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e10eba22c3582_87470634 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13806697275e10eba22bed83_88190652', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_1217175435e10eba22bf9e5_37907457 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
            <h1 class="h1 page-title"><span><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</span></h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_13064987085e10eba22bf2e9_21879349 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1217175435e10eba22bf9e5_37907457', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16062086295e10eba22c1191_69006564 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_13875579445e10eba22c1902_44930629 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_8872684305e10eba22c0c31_55606472 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16062086295e10eba22c1191_69006564', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13875579445e10eba22c1902_44930629', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_5423930805e10eba22c2946_31922737 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_4957704555e10eba22c2416_39860675 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5423930805e10eba22c2946_31922737', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_13806697275e10eba22bed83_88190652 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_13806697275e10eba22bed83_88190652',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_13064987085e10eba22bf2e9_21879349',
  ),
  'page_title' => 
  array (
    0 => 'Block_1217175435e10eba22bf9e5_37907457',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_8872684305e10eba22c0c31_55606472',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16062086295e10eba22c1191_69006564',
  ),
  'page_content' => 
  array (
    0 => 'Block_13875579445e10eba22c1902_44930629',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_4957704555e10eba22c2416_39860675',
  ),
  'page_footer' => 
  array (
    0 => 'Block_5423930805e10eba22c2946_31922737',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13064987085e10eba22bf2e9_21879349', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8872684305e10eba22c0c31_55606472', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4957704555e10eba22c2416_39860675', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
