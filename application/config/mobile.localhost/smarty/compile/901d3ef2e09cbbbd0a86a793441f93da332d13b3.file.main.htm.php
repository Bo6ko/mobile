<?php /* Smarty version Smarty-3.1.8, created on 2019-06-01 16:30:42
         compiled from "application/views\manager\main.htm" */ ?>
<?php /*%%SmartyHeaderCode:261935cf2391094a9d1-92184743%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '901d3ef2e09cbbbd0a86a793441f93da332d13b3' => 
    array (
      0 => 'application/views\\manager\\main.htm',
      1 => 1559399438,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '261935cf2391094a9d1-92184743',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cf23910cd81f8_46227831',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf23910cd81f8_46227831')) {function content_5cf23910cd81f8_46227831($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">

<?php echo $_smarty_tpl->getSubTemplate ("manager/head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body class="core">

<!-- HEADER BEGIN -->
<?php echo $_smarty_tpl->getSubTemplate ("manager/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- HEADER END -->

<!-- CONTENT BEGIN -->
<div id="content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<!-- CONTENT END -->

<!-- FOOTER BEGIN -->
<?php echo $_smarty_tpl->getSubTemplate ("manager/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- FOOTER END -->

</body>
</html><?php }} ?>