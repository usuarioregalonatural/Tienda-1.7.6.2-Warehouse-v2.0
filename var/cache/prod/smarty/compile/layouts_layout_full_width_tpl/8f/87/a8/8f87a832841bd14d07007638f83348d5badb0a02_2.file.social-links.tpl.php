<?php
/* Smarty version 3.1.33, created on 2020-01-04 12:31:44
  from '/var/www/html/themes/warehouse/templates/_elements/social-links.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e1077a0201692_50063701',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f87a832841bd14d07007638f83348d5badb0a02' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_elements/social-links.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5e1077a0201692_50063701 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21324707225e1077a01f1cc7_16197447', 'social_links');
?>

<?php }
/* {block 'social_links'} */
class Block_21324707225e1077a01f1cc7_16197447 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'social_links' => 
  array (
    0 => 'Block_21324707225e1077a01f1cc7_16197447',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<ul class="social-links <?php if (isset($_smarty_tpl->tpl_vars['class']->value)) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['class']->value, ENT_QUOTES, 'UTF-8');
}?>" itemscope itemtype="https://schema.org/Organization" itemid="#store-organization">
    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_facebook']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_facebook'] != '') {?><li class="facebook"><a itemprop="sameAs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_facebook'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-facebook" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_twitter']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_twitter'] != '') {?><li class="twitter"><a itemprop="sameAs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_twitter'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-twitter" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_instagram']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_instagram'] != '') {?><li class="instagram"><a itemprop="sameAs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_instagram'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-instagram" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_google']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_google'] != '') {?><li class="google"><a itemprop="sameAs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_google'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_pinterest']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_pinterest'] != '') {?><li class="pinterest"><a itemprop="sameAs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_pinterest'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_youtube']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_youtube'] != '') {?><li class="youtube"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_youtube'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-youtube" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_vimeo']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_vimeo'] != '') {?><li class="vimeo"><a itemprop="sameAs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_vimeo'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-vimeo" aria-hidden="true"></i></a></li><?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_linkedin']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_linkedin'] != '') {?><li class="linkedin"><a itemprop="sameAs" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_linkedin'], ENT_QUOTES, 'UTF-8');?>
" target="_blank" rel="noreferrer noopener"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li><?php }?>
</ul>
<?php
}
}
/* {/block 'social_links'} */
}
