<?php
/* Smarty version 3.1.33, created on 2019-12-31 19:50:36
  from '/var/www/html/themes/warehouse/templates/_partials/_variants/footer-copyrights-2.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b987c8c70c1_07504769',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0f7177df199772b2988de7d16c31f7f1a1a161de' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/_variants/footer-copyrights-2.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_elements/social-links.tpl' => 1,
  ),
),false)) {
function content_5e0b987c8c70c1_07504769 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_status']) {?>
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4232843495e0b987c8c1551_28858944', 'footer_copyrights');
?>

<?php }
}
/* {block 'footer_copyrights'} */
class Block_4232843495e0b987c8c1551_28858944 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer_copyrights' => 
  array (
    0 => 'Block_4232843495e0b987c8c1551_28858944',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <div id="footer-copyrights" class="_footer-copyrights-2 dropup">
            <div class="container">
                <div class="row">

                    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_img']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['fc_img']) {?>
                        <div class="col-12 copyright-img ">
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_img'], ENT_QUOTES, 'UTF-8');?>
" class="img-fluid" alt="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Payments','d'=>'Shop.Warehousetheme'),$_smarty_tpl ) );?>
"/>
                        </div>
                    <?php }?>

                    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['fc_txt']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['fc_txt']) {?>
                        <div class="col-12 copyright-txt">
                            <?php echo $_smarty_tpl->tpl_vars['iqitTheme']->value['fc_txt'];?>

                        </div>
                    <?php }?>

                    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_social_status'] == 1) {?>
                    <div class="col-12 block-social-links">
                        <?php $_smarty_tpl->_subTemplateRender('file:_elements/social-links.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('class'=>'_footer'), 0, false);
?>
                    </div>
                    <?php }?>

                </div>
            </div>
        </div>
    <?php
}
}
/* {/block 'footer_copyrights'} */
}
