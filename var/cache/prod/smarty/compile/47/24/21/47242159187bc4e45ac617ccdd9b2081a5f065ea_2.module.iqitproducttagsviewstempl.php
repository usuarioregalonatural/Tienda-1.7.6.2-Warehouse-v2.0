<?php
/* Smarty version 3.1.33, created on 2019-12-31 19:50:36
  from 'module:iqitproducttagsviewstempl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b987c7a0154_72577553',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '47242159187bc4e45ac617ccdd9b2081a5f065ea' => 
    array (
      0 => 'module:iqitproducttagsviewstempl',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b987c7a0154_72577553 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['tags']->value)) {?>
    <div class="iqitproducttags">
        <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['tags']->value, 'tag', false, 'i');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['i']->value => $_smarty_tpl->tpl_vars['tag']->value) {
?>
                <li><a href="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['url'][0], array( array('entity'=>'search','params'=>array('tag'=>urlencode($_smarty_tpl->tpl_vars['tag']->value))),$_smarty_tpl ) );?>
" class="tag tag-default"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tag']->value, ENT_QUOTES, 'UTF-8');?>
</a>
                </li>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </ul>
    </div>
<?php }
}
}
