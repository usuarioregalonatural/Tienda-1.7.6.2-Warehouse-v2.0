<?php
/* Smarty version 3.1.33, created on 2020-01-02 12:00:36
  from '/var/www/html/themes/warehouse/templates/_partials/footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0dcd546a27f2_36253201',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b976065f3be05ae7cf33546060e51e6682519534' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/footer.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/_variants/footer-1.tpl' => 1,
    'file:_partials/_variants/footer-2.tpl' => 1,
    'file:_partials/_variants/footer-3.tpl' => 1,
    'file:_partials/_variants/footer-4.tpl' => 1,
    'file:_partials/_variants/footer-5.tpl' => 1,
  ),
),false)) {
function content_5e0dcd546a27f2_36253201 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 1) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-1.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 2) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-2.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 3) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-3.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 4) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-4.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
} elseif ($_smarty_tpl->tpl_vars['iqitTheme']->value['f_layout'] == 5) {?>
  <?php $_smarty_tpl->_subTemplateRender('file:_partials/_variants/footer-5.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}?>

<?php }
}
