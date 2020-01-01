<?php
/* Smarty version 3.1.33, created on 2019-12-31 19:50:36
  from '/var/www/html/themes/warehouse/templates/_partials/head.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5e0b987c3f3147_85014641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '74cf1416e9ac1ad4144d4b0b01801af6a98cf336' => 
    array (
      0 => '/var/www/html/themes/warehouse/templates/_partials/head.tpl',
      1 => 1577795556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:_partials/stylesheets.tpl' => 1,
    'file:_partials/javascript.tpl' => 1,
  ),
),false)) {
function content_5e0b987c3f3147_85014641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18699041255e0b987c3d1b60_48747132', 'head_charset');
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11849098745e0b987c3d2473_84340695', 'head_ie_compatibility');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16271946875e0b987c3d2cf8_39083287', 'head_seo');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11460438515e0b987c3dad92_10616048', 'head_og_tags');
?>




<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21082462805e0b987c3e1875_21480054', 'head_viewport');
?>



<?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg'] != '') {?>
  <meta name="theme-color" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg'], ENT_QUOTES, 'UTF-8');?>
">
  <meta name="msapplication-navbutton-color" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_address_bg'], ENT_QUOTES, 'UTF-8');?>
">
<?php }?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6237094895e0b987c3e4e43_88351950', 'head_icons');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1488510285e0b987c3ea3d2_23687111', 'hook_fonts');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1106257155e0b987c3ecf40_31275996', 'head_organization_snippet');
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18732520595e0b987c3ef315_12303799', 'stylesheets');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7260081695e0b987c3f06e8_95869765', 'javascript_head');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10993695475e0b987c3f1ca8_49709154', 'hook_header');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3255973955e0b987c3f2ac0_96016569', 'hook_extra');
?>

<?php }
/* {block 'head_charset'} */
class Block_18699041255e0b987c3d1b60_48747132 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_charset' => 
  array (
    0 => 'Block_18699041255e0b987c3d1b60_48747132',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta charset="utf-8">
<?php
}
}
/* {/block 'head_charset'} */
/* {block 'head_ie_compatibility'} */
class Block_11849098745e0b987c3d2473_84340695 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_ie_compatibility' => 
  array (
    0 => 'Block_11849098745e0b987c3d2473_84340695',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <meta http-equiv="x-ua-compatible" content="ie=edge">
<?php
}
}
/* {/block 'head_ie_compatibility'} */
/* {block 'head_seo_title'} */
class Block_3557715435e0b987c3d3221_44253744 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_title'} */
/* {block 'head_seo_description'} */
class Block_10652197445e0b987c3d4150_67714486 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_description'} */
/* {block 'head_seo_keywords'} */
class Block_19988088475e0b987c3d5076_61706340 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['keywords'], ENT_QUOTES, 'UTF-8');
}
}
/* {/block 'head_seo_keywords'} */
/* {block 'head_seo_canonical'} */
class Block_17222509465e0b987c3d7350_05946440 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['page']->value['canonical']) {?>
    <link rel="canonical" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['canonical'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php
}
}
/* {/block 'head_seo_canonical'} */
/* {block 'head_hreflang'} */
class Block_4226392895e0b987c3d8b61_37827103 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['urls']->value['alternative_langs'], 'pageUrl', false, 'code');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['code']->value => $_smarty_tpl->tpl_vars['pageUrl']->value) {
?>
      <link rel="alternate" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['pageUrl']->value, ENT_QUOTES, 'UTF-8');?>
" hreflang="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['code']->value, ENT_QUOTES, 'UTF-8');?>
">
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
  <?php
}
}
/* {/block 'head_hreflang'} */
/* {block 'head_seo'} */
class Block_16271946875e0b987c3d2cf8_39083287 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_seo' => 
  array (
    0 => 'Block_16271946875e0b987c3d2cf8_39083287',
  ),
  'head_seo_title' => 
  array (
    0 => 'Block_3557715435e0b987c3d3221_44253744',
  ),
  'head_seo_description' => 
  array (
    0 => 'Block_10652197445e0b987c3d4150_67714486',
  ),
  'head_seo_keywords' => 
  array (
    0 => 'Block_19988088475e0b987c3d5076_61706340',
  ),
  'head_seo_canonical' => 
  array (
    0 => 'Block_17222509465e0b987c3d7350_05946440',
  ),
  'head_hreflang' => 
  array (
    0 => 'Block_4226392895e0b987c3d8b61_37827103',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <title><?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3557715435e0b987c3d3221_44253744', 'head_seo_title', $this->tplIndex);
?>
</title>
  <meta name="description" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10652197445e0b987c3d4150_67714486', 'head_seo_description', $this->tplIndex);
?>
">
  <meta name="keywords" content="<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19988088475e0b987c3d5076_61706340', 'head_seo_keywords', $this->tplIndex);
?>
">
  <?php if ($_smarty_tpl->tpl_vars['page']->value['meta']['robots'] !== 'index') {?>
    <meta name="robots" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['robots'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17222509465e0b987c3d7350_05946440', 'head_seo_canonical', $this->tplIndex);
?>


  <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4226392895e0b987c3d8b61_37827103', 'head_hreflang', $this->tplIndex);
?>

<?php
}
}
/* {/block 'head_seo'} */
/* {block 'head_og_tags'} */
class Block_11460438515e0b987c3dad92_10616048 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_og_tags' => 
  array (
    0 => 'Block_11460438515e0b987c3dad92_10616048',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <meta property="og:title" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:url" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:site_name" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"/>
    <meta property="og:description" content="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['description'], ENT_QUOTES, 'UTF-8');?>
">
    <meta property="og:type" content="website">

    <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo']) == 1 && $_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo'] != '') {?>
      <meta property="og:image" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['sm_og_logo'], ENT_QUOTES, 'UTF-8');?>
" />
      <?php } else { ?>
      <meta property="og:image" content="https://<?php echo htmlspecialchars($_SERVER['HTTP_HOST'], ENT_QUOTES, 'UTF-8');
echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
" />
    <?php }
}
}
/* {/block 'head_og_tags'} */
/* {block 'head_viewport'} */
class Block_21082462805e0b987c3e1875_21480054 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_viewport' => 
  array (
    0 => 'Block_21082462805e0b987c3e1875_21480054',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_pinch_zoom'] == 1) {?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php } else { ?>
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
  <?php }
}
}
/* {/block 'head_viewport'} */
/* {block 'head_icons'} */
class Block_6237094895e0b987c3e4e43_88351950 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_icons' => 
  array (
    0 => 'Block_6237094895e0b987c3e4e43_88351950',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <link rel="icon" type="image/vnd.microsoft.icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <link rel="shortcut icon" type="image/x-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon'], ENT_QUOTES, 'UTF-8');?>
?<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['favicon_update_time'], ENT_QUOTES, 'UTF-8');?>
">
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_apple']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_apple'] != '') {?>
    <link rel="apple-touch-icon" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_apple'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_android']) && $_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_android'] != '') {?>
    <link rel="icon" sizes="192x192" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['rm_icon_android'], ENT_QUOTES, 'UTF-8');?>
">
  <?php }
}
}
/* {/block 'head_icons'} */
/* {block 'hook_fonts'} */
class Block_1488510285e0b987c3ea3d2_23687111 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_fonts' => 
  array (
    0 => 'Block_1488510285e0b987c3ea3d2_23687111',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_t'] == 'google') {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_bfont_g_url'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
  <?php }?>
  <?php if ($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_t'] == 'google') {?>
    <link href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['iqitTheme']->value['typo_hfont_g_url'], ENT_QUOTES, 'UTF-8');?>
" rel="stylesheet">
  <?php }
}
}
/* {/block 'hook_fonts'} */
/* {block 'head_organization_snippet'} */
class Block_1106257155e0b987c3ecf40_31275996 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'head_organization_snippet' => 
  array (
    0 => 'Block_1106257155e0b987c3ecf40_31275996',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php echo '<script'; ?>
 type="application/ld+json">

{
"@context": "https://schema.org",
"@type": "Organization",
"url": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['base_url'], ENT_QUOTES, 'UTF-8');?>
",
"name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
",
"logo": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo'], ENT_QUOTES, 'UTF-8');?>
",
"@id": "#store-organization"
}

<?php echo '</script'; ?>
>
<?php
}
}
/* {/block 'head_organization_snippet'} */
/* {block 'stylesheets'} */
class Block_18732520595e0b987c3ef315_12303799 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'stylesheets' => 
  array (
    0 => 'Block_18732520595e0b987c3ef315_12303799',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/stylesheets.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('stylesheets'=>$_smarty_tpl->tpl_vars['stylesheets']->value), 0, false);
}
}
/* {/block 'stylesheets'} */
/* {block 'javascript_head'} */
class Block_7260081695e0b987c3f06e8_95869765 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'javascript_head' => 
  array (
    0 => 'Block_7260081695e0b987c3f06e8_95869765',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php $_smarty_tpl->_subTemplateRender("file:_partials/javascript.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('javascript'=>$_smarty_tpl->tpl_vars['javascript']->value['head'],'vars'=>$_smarty_tpl->tpl_vars['js_custom_vars']->value), 0, false);
}
}
/* {/block 'javascript_head'} */
/* {block 'hook_header'} */
class Block_10993695475e0b987c3f1ca8_49709154 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_header' => 
  array (
    0 => 'Block_10993695475e0b987c3f1ca8_49709154',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

  <?php echo $_smarty_tpl->tpl_vars['HOOK_HEADER']->value;?>

<?php
}
}
/* {/block 'hook_header'} */
/* {block 'hook_extra'} */
class Block_3255973955e0b987c3f2ac0_96016569 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'hook_extra' => 
  array (
    0 => 'Block_3255973955e0b987c3f2ac0_96016569',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'hook_extra'} */
}
