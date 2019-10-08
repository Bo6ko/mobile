<?php /* Smarty version Smarty-3.1.8, created on 2019-05-30 17:22:33
         compiled from "application/views\public\main.htm" */ ?>
<?php /*%%SmartyHeaderCode:60815cebf7b54a35e0-92771228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6974f210586e839e28f6ef393f1cfaa3b66ed845' => 
    array (
      0 => 'application/views\\public\\main.htm',
      1 => 1559229693,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '60815cebf7b54a35e0-92771228',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cebf7b55a3399_89958015',
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebf7b55a3399_89958015')) {function content_5cebf7b55a3399_89958015($_smarty_tpl) {?><!DOCTYPE html>
<html lang="fr">

<?php echo $_smarty_tpl->getSubTemplate ("public/head.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<body class="core">

<!-- HEADER BEGIN -->
<?php echo $_smarty_tpl->getSubTemplate ("public/header.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- HEADER END -->

<!-- CONTENT BEGIN -->
<div id="content">
    <?php echo $_smarty_tpl->tpl_vars['content']->value;?>

</div>
<!-- CONTENT END -->

<!-- FOOTER BEGIN -->
<?php echo $_smarty_tpl->getSubTemplate ("public/footer.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<!-- FOOTER END -->

</body>
</html><?php }} ?>