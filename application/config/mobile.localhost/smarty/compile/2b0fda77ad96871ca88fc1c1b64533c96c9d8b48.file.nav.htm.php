<?php /* Smarty version Smarty-3.1.8, created on 2019-05-27 16:44:05
         compiled from "application/views\public\core\headers\nav.htm" */ ?>
<?php /*%%SmartyHeaderCode:20345cebf7b56ae7a7-93797145%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2b0fda77ad96871ca88fc1c1b64533c96c9d8b48' => 
    array (
      0 => 'application/views\\public\\core\\headers\\nav.htm',
      1 => 1484919143,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20345cebf7b56ae7a7-93797145',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cebf7b56dc6a6_16166687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebf7b56dc6a6_16166687')) {function content_5cebf7b56dc6a6_16166687($_smarty_tpl) {?><ul id="main-menu" class="sm sm-core">
	<li><a href="<?php echo @WEB_PATH;?>
">Accueil</a></li>
	<li><a href="<?php echo @WEB_PATH;?>
vehicules-occasions">Occasions</a></li>
	<li><a href="<?php echo @WEB_PATH;?>
garantie">Garantie</a></li>
	<li><a href="<?php echo @WEB_PATH;?>
promotions">Promotions</a></li>
	<li><a href="<?php echo @WEB_PATH;?>
financement">Financement</a></li>
	<li><a href="<?php echo @WEB_PATH;?>
services">Services</a>
		<ul>
			<li><a href="<?php echo @WEB_PATH;?>
comparator">Comparateur véhicules d'occasion</a></li>
			<li><a href="javascript:void(0);">Evaluez ma reprise</a></li>
			<li><a href="javascript:void(0);">Commandez votre véhicule</a></li>
		</ul>
	</li>
	<li><a href="<?php echo @WEB_PATH;?>
contact">Nous contacter</a></li>
</ul>

<script>
	$(function() {
		$('#main-menu').smartmenus({
			subMenusSubOffsetX: 1,
			subMenusSubOffsetY: -8
		});
	});
</script><?php }} ?>