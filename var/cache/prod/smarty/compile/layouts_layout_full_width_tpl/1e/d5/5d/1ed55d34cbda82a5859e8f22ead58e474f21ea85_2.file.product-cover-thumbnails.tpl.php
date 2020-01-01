<?php
/* Smarty version 3.1.33, created on 2019-12-31 19:50:36
  from '/var/www/html/themes/warehouse/templates/catalog/_partials/product-cover-thumbnails.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b987c6e7208_35498427',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1ed55d34cbda82a5859e8f22ead58e474f21ea85' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/catalog/_partials/product-cover-thumbnails.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:catalog/_partials/_product_partials/product-thumbnails.tpl' => 2,
    'file:catalog/_partials/_product_partials/product-cover.tpl' => 2,
  ),
),false)) {
function content_5e0b987c6e7208_35498427 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="images-container images-container-<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'] == "left" || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'] == "leftd") {?>left images-container-d-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'], ENT_QUOTES, 'UTF-8');?>
 <?php } else { ?>bottom<?php }?>">
    <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'] == "left" || $_smarty_tpl->tpl_vars['iqitTheme']->value['pp_thumbs'] == "leftd") {?>
        <div class="row no-gutters">
            <?php if (count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?><div class="col-2 col-left-product-thumbs"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div><?php }?>
            <div class="<?php if (count($_smarty_tpl->tpl_vars['product']->value['images']) > 1) {?>col-10<?php } else { ?>col-12<?php }?> col-left-product-cover"><?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-cover.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?></div>
        </div>
     <?php } else { ?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-cover.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
        <?php $_smarty_tpl->_subTemplateRender('file:catalog/_partials/_product_partials/product-thumbnails.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
     <?php }?>
</div>
<?php }
}
