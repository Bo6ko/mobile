<?php /* Smarty version Smarty-3.1.8, created on 2019-05-27 16:44:05
         compiled from "application/views\developer\bar.htm" */ ?>
<?php /*%%SmartyHeaderCode:283275cebf7b56460e1-30082510%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6bc206bc029c340739cddd510ce26f19f202697c' => 
    array (
      0 => 'application/views\\developer\\bar.htm',
      1 => 1484866895,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '283275cebf7b56460e1-30082510',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cebf7b56525d8_12894917',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebf7b56525d8_12894917')) {function content_5cebf7b56525d8_12894917($_smarty_tpl) {?><script type="text/javascript" src="<?php echo @WEB_PATH;?>
plugins/jquery.cookie/src/jquery.cookie.js"></script>
<script type="text/javascript" src="<?php echo @WEB_PATH;?>
js/developer/global.js"></script>
<div id="dev-show">&nbsp;</div>

<div id="developer">
	
	<a href="javascript:void(0);" id="dev-hide" class="close">&times;</a>
	
	<div class="place">
		
		<h4>View port on mobile devices</h4>
		
		<div class="dev-viewports">
			<ul>
				<li data-viewport="desktop" class="viewport-preview desktop" title="Desktop"></li>
				<li data-viewport="tablet" class="viewport-preview tablet" title="Tablet Portrait"></li>
				<li data-viewport="tablet-landscape" class="viewport-preview tablet-landscape" title="Tablet Landscape"></li>
				<li data-viewport="mobile" class="viewport-preview mobile" title="Mobile Portrait"></li>
				<li data-viewport="mobile-landscape" class="viewport-preview mobile-landscape" title="Mobile Landscape"></li>
				<div class="clear"></div>
			</ul>
		</div>
		
		<h4>Design &amp; development</h4>
		
		<div class="dev-tools">
			<ul>
				<li data-load="fonts">choose <span>Fonts</span></li>
				<li data-load="colors">choose <span>Colors</span></li>
				<li data-load="headers">choose<span>Header</span></li>
				<li data-load="footers">choose <span>Footer</span></li>
				<li data-load="sliders">choose <span>Slider</span></li>
				<li data-load="features">choose <span>Feature</span></li>
				<div class="clear"></div>
			</ul>
		</div>
		
		<div id="workplace"></div>
		
		
	</div>
</div><?php }} ?>