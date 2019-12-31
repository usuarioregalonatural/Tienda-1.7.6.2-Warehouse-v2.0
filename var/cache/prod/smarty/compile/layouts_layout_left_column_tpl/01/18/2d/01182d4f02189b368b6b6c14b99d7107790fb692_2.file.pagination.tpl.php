<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:39:18
  from '/var/www/html/themes/warehouse/templates/_partials/pagination.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b4f86485e83_27542749',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '01182d4f02189b368b6b6c14b99d7107790fb692' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/pagination.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b4f86485e83_27542749 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<nav class="pagination">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10573576565e0b4f86475184_38010689', 'pagination_page_list');
?>

</nav>

<?php }
/* {block 'pagination_page_list'} */
class Block_10573576565e0b4f86475184_38010689 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'pagination_page_list' => 
  array (
    0 => 'Block_10573576565e0b4f86475184_38010689',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <?php if ($_smarty_tpl->tpl_vars['pagination']->value['should_be_displayed']) {?>
        <ul class="page-list clearfix text-center">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['pagination']->value['pages'], 'page');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['page']->value) {
?>
                <?php if ((($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous' || $_smarty_tpl->tpl_vars['page']->value['type'] === 'next') && $_smarty_tpl->tpl_vars['page']->value['clickable']) || $_smarty_tpl->tpl_vars['page']->value['type'] === 'page' || $_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
                    <li class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>spacer<?php }?> <?php if ($_smarty_tpl->tpl_vars['page']->value['current']) {?> current <?php }?>">
                        <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'spacer') {?>
                            <span class="spacer">&hellip;</span>
                        <?php } else { ?>
                            <a
                                    rel="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>prev<?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next<?php } else { ?>nofollow<?php }?>"
                                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?> id="infinity-url" <?php }?>
                                    class="<?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>previous <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>next <?php }
echo htmlspecialchars(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'classnames' ][ 0 ], array( array('disabled'=>!$_smarty_tpl->tpl_vars['page']->value['clickable'],'js-search-link'=>true) )), ENT_QUOTES, 'UTF-8');?>
"
                                    data-after-click="backToTop"
                            >
                                <?php if ($_smarty_tpl->tpl_vars['page']->value['type'] === 'previous') {?>
                                    <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <?php } elseif ($_smarty_tpl->tpl_vars['page']->value['type'] === 'next') {?>
                                    <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <?php } else { ?>
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['page'], ENT_QUOTES, 'UTF-8');?>

                                <?php }?>
                            </a>
                        <?php }?>
                    </li>
                <?php }?>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
        <?php }?>
    <?php
}
}
/* {/block 'pagination_page_list'} */
}
