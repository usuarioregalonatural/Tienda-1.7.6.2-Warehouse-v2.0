<?php
/* Smarty version 3.1.33, created on 2020-01-02 12:00:36
  from '/var/www/html/themes/warehouse/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dcd54399027_47458077',
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
function content_5e0dcd54399027_47458077 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14111705115e0dcd543947e7_39163304', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_11152668275e0dcd543953f9_82691673 extends Smarty_Internal_Block
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
class Block_11183632625e0dcd54394d61_27004375 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11152668275e0dcd543953f9_82691673', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_19775250895e0dcd54396be0_93543317 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_4406167615e0dcd54397357_35689549 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_431669995e0dcd54396677_37435706 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19775250895e0dcd54396be0_93543317', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4406167615e0dcd54397357_35689549', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_4266632705e0dcd543983c2_36111083 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_3625053115e0dcd54397e89_14295628 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4266632705e0dcd543983c2_36111083', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_14111705115e0dcd543947e7_39163304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_14111705115e0dcd543947e7_39163304',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_11183632625e0dcd54394d61_27004375',
  ),
  'page_title' => 
  array (
    0 => 'Block_11152668275e0dcd543953f9_82691673',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_431669995e0dcd54396677_37435706',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_19775250895e0dcd54396be0_93543317',
  ),
  'page_content' => 
  array (
    0 => 'Block_4406167615e0dcd54397357_35689549',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_3625053115e0dcd54397e89_14295628',
  ),
  'page_footer' => 
  array (
    0 => 'Block_4266632705e0dcd543983c2_36111083',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11183632625e0dcd54394d61_27004375', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_431669995e0dcd54396677_37435706', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3625053115e0dcd54397e89_14295628', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
