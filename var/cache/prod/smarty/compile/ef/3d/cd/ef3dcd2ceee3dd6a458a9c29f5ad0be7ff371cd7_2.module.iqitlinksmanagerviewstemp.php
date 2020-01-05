<?php
/* Smarty version 3.1.33, created on 2020-01-04 20:43:36
  from 'module:iqitlinksmanagerviewstemp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e10eae8317598_31023039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ef3dcd2ceee3dd6a458a9c29f5ad0be7ff371cd7' => 
    array (
      0 => 'module:iqitlinksmanagerviewstemp',
      1 => 1577795555,
      2 => 'module',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e10eae8317598_31023039 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlocks']->value, 'linkBlock');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['linkBlock']->value) {
?>
    <?php if ($_smarty_tpl->tpl_vars['linkBlock']->value['hook'] == 'displayNav1' || $_smarty_tpl->tpl_vars['linkBlock']->value['hook'] == 'displayNav2') {?>
        <div class="block-iqitlinksmanager block-iqitlinksmanager-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
 block-links-inline d-inline-block">
            <ul>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                    <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['url']) && isset($_smarty_tpl->tpl_vars['link']->value['data']['title'])) {?>
                        <li>
                            <a
                                    href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                    <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['description'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['description'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                            >
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>

                            </a>
                        </li>
                    <?php }?>
                <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php } elseif ($_smarty_tpl->tpl_vars['linkBlock']->value['hook'] == 'displayLeftColumn' || $_smarty_tpl->tpl_vars['linkBlock']->value['hook'] == 'displayRightColumn') {?>
        <div class="block block-toggle block-iqitlinksmanager block-iqitlinksmanager-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
 block-links js-block-toggle">
            <h5 class="block-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></h5>
            <div class="block-content">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['url']) && isset($_smarty_tpl->tpl_vars['link']->value['data']['title'])) {?>
                            <li>
                                <a
                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['description'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['description'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                >
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>

                                </a>
                            </li>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    <?php } else { ?>
        <div class="col col-md block block-toggle block-iqitlinksmanager block-iqitlinksmanager-<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['id'], ENT_QUOTES, 'UTF-8');?>
 block-links js-block-toggle">
            <h5 class="block-title"><span><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['linkBlock']->value['title'], ENT_QUOTES, 'UTF-8');?>
</span></h5>
            <div class="block-content">
                <ul>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['linkBlock']->value['links'], 'link');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['link']->value) {
?>
                        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['url']) && isset($_smarty_tpl->tpl_vars['link']->value['data']['title'])) {?>
                            <li>
                                <a
                                        href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['url'], ENT_QUOTES, 'UTF-8');?>
"
                                        <?php if (isset($_smarty_tpl->tpl_vars['link']->value['data']['description'])) {?>title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['description'], ENT_QUOTES, 'UTF-8');?>
"<?php }?>
                                >
                                    <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value['data']['title'], ENT_QUOTES, 'UTF-8');?>

                                </a>
                            </li>
                        <?php }?>
                    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </ul>
            </div>
        </div>
    <?php }
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
