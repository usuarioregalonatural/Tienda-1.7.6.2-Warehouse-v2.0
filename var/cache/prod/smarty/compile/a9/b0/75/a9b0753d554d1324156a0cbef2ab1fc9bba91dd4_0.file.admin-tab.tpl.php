<?php
/* Smarty version 3.1.33, created on 2019-12-31 13:54:33
  from '/var/www/html/modules/ph_relatedposts/views/templates/admin/admin-tab.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b45099add03_26971872',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a9b0753d554d1324156a0cbef2ab1fc9bba91dd4' => 
    array (
      0 => '/var/www/html/modules/ph_relatedposts/views/templates/admin/admin-tab.tpl',
      1 => 1577795555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b45099add03_26971872 (Smarty_Internal_Template $_smarty_tpl) {
?>    <div class="form-group">
        <div class="col-12">

            <div class="row">
                <div class="col-xs-6">
                    <input type="text" class="form-control" id="related_posts_filter" size="60" placeholder="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Type to filter posts:','mod'=>'ph_relatedposts'),$_smarty_tpl ) );?>
" />
                </div>
            </div>

            <div class="row" style="margin-top: 2rem">
                <div class="col-xs-6">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Available posts','mod'=>'ph_relatedposts'),$_smarty_tpl ) );?>
</p>

                    <select multiple id="ph_relatedposts_left" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                            <option value="<?php echo intval($_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post']);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' ));?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                    <a href="#" id="ph_relatedposts_move_to_right" class="btn btn-primary" style="margin-top: 1rem">
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add','mod'=>'ph_relatedposts'),$_smarty_tpl ) );?>

                        <i class="material-icons">chevron_right</i>
                    </a>

                </div>
                <div class="col-xs-6">
                    <p><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Posts related to this product','mod'=>'ph_relatedposts'),$_smarty_tpl ) );?>
</p>

                    <select multiple id="ph_relatedposts_right" name="ph_relatedposts[related_posts][]" class="form-control">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['selected_posts']->value, 'post');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['post']->value) {
?>
                            <option value="<?php echo intval($_smarty_tpl->tpl_vars['post']->value['id_simpleblog_post']);?>
"><?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'escape' ][ 0 ], array( $_smarty_tpl->tpl_vars['post']->value['title'],'html','UTF-8' ));?>
</option>
                        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>

                    <a href="#" id="move_to_left" class="btn btn-danger" style="margin-top: 1rem">
                        <i class="material-icons">delete</i>
                        <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Remove','mod'=>'ph_relatedposts'),$_smarty_tpl ) );?>

                    </a>

                </div>
            </div>
        </div>
    </div>




    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['path']->value;?>
views/js/admin_tab.js"><?php echo '</script'; ?>
><?php }
}
