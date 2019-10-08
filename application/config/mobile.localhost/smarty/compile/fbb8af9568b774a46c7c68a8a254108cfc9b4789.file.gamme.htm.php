<?php /* Smarty version Smarty-3.1.8, created on 2019-05-27 16:44:05
         compiled from "application/views\public\layers\gamme.htm" */ ?>
<?php /*%%SmartyHeaderCode:124565cebf7b5411277-61821565%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fbb8af9568b774a46c7c68a8a254108cfc9b4789' => 
    array (
      0 => 'application/views\\public\\layers\\gamme.htm',
      1 => 1484862151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '124565cebf7b5411277-61821565',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'gamme' => 0,
    'marque' => 0,
    'modele' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cebf7b5494b10_61025300',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebf7b5494b10_61025300')) {function content_5cebf7b5494b10_61025300($_smarty_tpl) {?><div class="layer gamme">
	
	<div class="section">
		
		<ul id="filter" class="wow zoomInDown">
			<li class="current all"><a href="javascript:void(0);">All</a></li><?php  $_smarty_tpl->tpl_vars['marque'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marque']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['gamme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marque']->key => $_smarty_tpl->tpl_vars['marque']->value){
$_smarty_tpl->tpl_vars['marque']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['marque']->key;
?><li style="background-image: url('<?php echo @WBASE;?>
<?php echo $_smarty_tpl->tpl_vars['marque']->value['g_logo'];?>
');"><a href="<?php echo @WEB_PATH;?>
gamme/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['marque']->value['marque_name'], 'UTF-8');?>
"><?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_name'];?>
</a></li><?php } ?>
		</ul>
		
		<div class="clear"></div>
		
		<ul id="portfolio">
		<?php  $_smarty_tpl->tpl_vars['marque'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marque']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['gamme']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marque']->key => $_smarty_tpl->tpl_vars['marque']->value){
$_smarty_tpl->tpl_vars['marque']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['marque']->key;
?>
			<?php if (isset($_smarty_tpl->tpl_vars['marque']->value['modeles'])&&!empty($_smarty_tpl->tpl_vars['marque']->value['modeles'])&&is_array($_smarty_tpl->tpl_vars['marque']->value['modeles'])&&count($_smarty_tpl->tpl_vars['marque']->value['modeles'])>0){?>
			<?php  $_smarty_tpl->tpl_vars['modele'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modele']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['marque']->value['modeles']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modele']->key => $_smarty_tpl->tpl_vars['modele']->value){
$_smarty_tpl->tpl_vars['modele']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['modele']->key;
?>
			<li class="<?php echo mb_strtolower($_smarty_tpl->tpl_vars['marque']->value['marque_name'], 'UTF-8');?>
 wow zoomInUp">
				<a href="<?php echo @WEB_PATH;?>
gamme/<?php echo mb_strtolower($_smarty_tpl->tpl_vars['marque']->value['marque_name'], 'UTF-8');?>
?modele=<?php echo $_smarty_tpl->tpl_vars['modele']->value['modele_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['modele']->value['modele_name'];?>
</a>
				<div class="modele" style="background-image: url('<?php echo @WBASE;?>
<?php echo $_smarty_tpl->tpl_vars['modele']->value['g_medium'];?>
');"></div>
			</li>
			<?php } ?>
			<?php }?>
		<?php } ?>
			<div class="clear"></div>
		</ul>
		
		<div class="clear"></div>
		
	</div>
	
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('ul#filter a').click(function() {
			$(this).css('outline','none');
			 $('ul#filter .current').removeClass('current');
			 $(this).parent().addClass('current');
			 var filterVal = $(this).text().toLowerCase().replace(' ','-');
        
	    if(filterVal == 'all') {
	      $('ul#portfolio li.hidden').fadeIn('slow').removeClass('hidden');
	    } else {
	      $('ul#portfolio li').each(function() {
	        if(!$(this).hasClass(filterVal)) {
	          $(this).fadeOut('normal').addClass('hidden');
	        } else {
	          $(this).fadeIn('slow').removeClass('hidden');
	        }
	      });
	    }
    
    return false;
  });
});
</script><?php }} ?>