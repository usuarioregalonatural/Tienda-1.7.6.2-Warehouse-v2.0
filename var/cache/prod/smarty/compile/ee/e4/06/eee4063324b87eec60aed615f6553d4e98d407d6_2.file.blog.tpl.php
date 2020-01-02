<?php
/* Smarty version 3.1.33, created on 2020-01-02 13:34:35
  from '/var/www/html/modules/iqitelementor/views/templates/widgets/blog.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0de35b3e4643_10583785',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'eee4063324b87eec60aed615f6553d4e98d407d6' => 
    array (
      0 => '/var/www/html/modules/iqitelementor/views/templates/widgets/blog.tpl',
      1 => 1577795555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature.tpl' => 2,
    'module:iqitelementor/views/templates/widgets/blog/post-small.tpl' => 1,
  ),
),false)) {
function content_5e0de35b3e4643_10583785 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['posts']->value) && count($_smarty_tpl->tpl_vars['posts']->value)) {?>


    <?php if ($_smarty_tpl->tpl_vars['view']->value == 'carousel') {?>
        <section class="elementor-blog-posts elementor-blog-posts-carousel elementor-slick-slider ph_simpleblog">
            <div class="elementor-blog-carousel simpleblog-posts <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['classes']->value, ENT_QUOTES, 'UTF-8');?>
" data-slider_options='<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'json_encode' ][ 0 ], array( $_smarty_tpl->tpl_vars['options']->value ));?>
'>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <div class="simpleblog-posts-column"><?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['post']->value), 0, true);
?></div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>
    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == 'grid') {?>
        <section class="elementor-blog-posts elementor-blog-posts-grid ph_simpleblog">
            <div class="row simpleblog-posts">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <div class="simpleblog-posts-column <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['options']->value['gridClasses'], ENT_QUOTES, 'UTF-8');?>
"><?php $_smarty_tpl->_subTemplateRender("module:ph_simpleblog/views/templates/front/1.7/_partials/post-miniature.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['post']->value), 0, true);
?></div>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        </section>
    <?php } elseif ($_smarty_tpl->tpl_vars['view']->value == 'list') {?>
        <section class="elementor-blog-posts elementor-blog-posts-list">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                    <?php $_smarty_tpl->_subTemplateRender("module:iqitelementor/views/templates/widgets/blog/post-small.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('post'=>$_smarty_tpl->tpl_vars['post']->value), 0, true);
?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </section>
    <?php }?>


<?php }?>



<?php }
}
