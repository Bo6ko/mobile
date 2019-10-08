<?php /* Smarty version Smarty-3.1.8, created on 2019-05-27 16:44:05
         compiled from "application/views\public\core\headers\nav-right.htm" */ ?>
<?php /*%%SmartyHeaderCode:284135cebf7b566a678-76243622%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a4916364efffa050a1e8e52329b48d63f97f035' => 
    array (
      0 => 'application/views\\public\\core\\headers\\nav-right.htm',
      1 => 1484937351,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284135cebf7b566a678-76243622',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'cfg' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cebf7b56a2e18_21914390',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebf7b56a2e18_21914390')) {function content_5cebf7b56a2e18_21914390($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_debug')) include 'C:\\xampp\\htdocs\\3wcms\\application\\third_party\\Smarty\\plugins\\modifier.debug.php';
?><div id="core-header" class="layer header nav-right">
		
	<div class="section">
		
		<div class="logoto wow zoomInDown"><a href="<?php echo @WEB_PATH;?>
"><img src="/files/1/cfg/1-logo.png" alt="" /> <h3><?php if (isset($_smarty_tpl->tpl_vars['cfg']->value['concession_name'])&&!empty($_smarty_tpl->tpl_vars['cfg']->value['concession_name'])){?><?php echo $_smarty_tpl->tpl_vars['cfg']->value['concession_name'];?>
<?php }else{ ?><?php echo smarty_modifier_debug('$cfg.concession_name');?>
<?php }?><br/><span><?php if (isset($_smarty_tpl->tpl_vars['cfg']->value['concession_slogan'])&&!empty($_smarty_tpl->tpl_vars['cfg']->value['concession_slogan'])){?><?php echo $_smarty_tpl->tpl_vars['cfg']->value['concession_slogan'];?>
<?php }else{ ?><?php echo smarty_modifier_debug('$cfg.concession_slogan');?>
<?php }?></span></h3><div class="clear">&nbsp;</div></a></div>
		
		<nav id="main-nav" class="nav-right wow zoomInDown" role="navigation">
			<?php echo $_smarty_tpl->getSubTemplate ("public/core/headers/nav.htm", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		</nav>
	</div>
</div><?php }} ?>