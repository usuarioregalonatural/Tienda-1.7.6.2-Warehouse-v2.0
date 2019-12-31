<?php
/* Smarty version 3.1.33, created on 2019-12-31 14:05:46
  from '/var/www/html/modules/iqitsizecharts/views/templates/admin/bo_module.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b47aa3dab55_05684306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aa10b46c311e5589444b21c68823aaf12e76e27e' => 
    array (
      0 => '/var/www/html/modules/iqitsizecharts/views/templates/admin/bo_module.tpl',
      1 => 1577795555,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e0b47aa3dab55_05684306 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="panel"><h3><i class="icon-list-ul"></i> <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Charts list','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>

    <span class="panel-heading-action">
        <a id="desc-product-new" class="list-toolbar-btn" href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
&addIqitSizeChart=1">
            <span title="" data-toggle="tooltip" class="label-tooltip" data-original-title="<?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Add new','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>
" data-html="true">
                <i class="process-icon-new "></i>
            </span>
        </a>
    </span>
    </h3>
    <div id="chartsContent">
        <div id="iqitCharts">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['charts']->value, 'chart');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['chart']->value) {
?>
                <div id="charts_<?php echo $_smarty_tpl->tpl_vars['chart']->value['id_iqitsizechart'];?>
" class="panel">
                    <div class="row">
                        <div class="col-xs-12">
                            <h4 class="pull-left">
                                #<?php echo $_smarty_tpl->tpl_vars['chart']->value['id_iqitsizechart'];?>
 - <?php echo $_smarty_tpl->tpl_vars['chart']->value['title'];?>

                                <?php if ($_smarty_tpl->tpl_vars['chart']->value['is_shared']) {?>
                                    <div>
                                        <span class="label color_field pull-left" style="background-color:#108510;color:white;margin-top:5px;">
                                            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Shared chart','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>

                                        </span>
                                    </div>
                                <?php }?>
                            </h4>
                            <div class="btn-group-action pull-right">
                                <a class="btn btn-default"
                                    href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
&updateiqitsizecharts=1&id_iqitsizechart=<?php echo $_smarty_tpl->tpl_vars['chart']->value['id_iqitsizechart'];?>
">
                                    <i class="icon-edit"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Edit','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>

                                </a>
                                <a class="btn btn-default"
                                    href="<?php echo $_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminModules');?>
&configure=<?php echo $_smarty_tpl->tpl_vars['module']->value;?>
&deleteiqitsizecharts=1&id_iqitsizechart=<?php echo $_smarty_tpl->tpl_vars['chart']->value['id_iqitsizechart'];?>
">
                                    <i class="icon-trash"></i>
                                    <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['l'][0], array( array('s'=>'Delete','mod'=>'iqitsizecharts'),$_smarty_tpl ) );?>

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        </div>
    </div>
</div>
<?php }
}
