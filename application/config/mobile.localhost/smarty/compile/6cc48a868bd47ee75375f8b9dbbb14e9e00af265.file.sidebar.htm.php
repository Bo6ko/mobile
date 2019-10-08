<?php /* Smarty version Smarty-3.1.8, created on 2019-05-27 16:44:05
         compiled from "application/views\public\blocks\sidebar.htm" */ ?>
<?php /*%%SmartyHeaderCode:322495cebf7b57c27e9-85965217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6cc48a868bd47ee75375f8b9dbbb14e9e00af265' => 
    array (
      0 => 'application/views\\public\\blocks\\sidebar.htm',
      1 => 1485182455,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '322495cebf7b57c27e9-85965217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'favorites' => 0,
    'last_visited' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cebf7b57eb391_82197973',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebf7b57eb391_82197973')) {function content_5cebf7b57eb391_82197973($_smarty_tpl) {?><ul id="example-1" class="sticklr wow bounceInDown">
	<li>
    	<a href="#" class="icon-search" title="Site switcher"></a>
        <ul>
            <li class="sticklr-title"><h4>Trouvez votre vehicule</h4></li>
            <li><a href="javascript:void(0);">Vehicule occassion</a> </li>
            <li><a href="javascript:void(0);">Vehicule neuf</a> </li>
            <li><a href="javascript:void(0);">Gamme VN</a> </li>
        </ul>
    </li>
    <li>
        <a href="#" class="icon-contact" title="Site switcher"></a>
        <ul>
			<li class="sticklr-title"><h4>Contact forms</h4></li>
			<li><a class="jmp-form-ajax" href="/form/general">Nous contacter</a> </li>
			<li><a class="jmp-form-ajax" href="/form/general">Service après-vente</a> </li>
			<li><a class="jmp-form-ajax" href="/form/general">Demande de brochure</a> </li>
			<li><a class="jmp-form-ajax" href="/form/general">Réserver un essai</a> </li>
        </ul>
    </li>
    <li>
        <a href="#" class="icon-favorites" title="Favorites"></a>
        <?php if (isset($_smarty_tpl->tpl_vars['favorites']->value)&&!empty($_smarty_tpl->tpl_vars['favorites']->value)){?>
			<?php echo $_smarty_tpl->tpl_vars['favorites']->value;?>

        <?php }?>
    </li>
    <li>
        <a href="#" class="icon-location" title="Last visited"></a>
        <?php if (isset($_smarty_tpl->tpl_vars['last_visited']->value)&&!empty($_smarty_tpl->tpl_vars['last_visited']->value)){?>
			<?php echo $_smarty_tpl->tpl_vars['last_visited']->value;?>

        <?php }?>
    </li>
    <li>
        <a href="#" class="icon-service" title="Search"></a>
        <ul>
			<li class="sticklr-title"><h4>Prendre un RDV Atelier</h4></li>
            <li class="explain"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend est at ex dignissim tempus.</p></li>
        </ul>
    </li>
    <li><a href="#" class="icon-phone" title="Search"></a>
        <ul>
            <li class="sticklr-title"><h4>Trouvez votre vehicule</h4></li>
            <li class="explain"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend est at ex dignissim tempus.</p></li>
        </ul>
    </li>
    <li>
    	<a href="#" class="icon-compare" title="Search"></a>
        <ul>
            <li class="sticklr-title"><h4>Comparer vehicules</h4></li>
            <li class="explain"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas eleifend est at ex dignissim tempus.</p></li>
        </ul>
    </li>
</ul>
    
<script type="text/javascript" src="<?php echo @WEB_PATH;?>
plugins/jquery.sticklr/jquery-sticklr-1.4.pack.js"></script>
<script type="text/javascript">

$(document).ready(function(){
    $('#example-1').sticklr({
		showOn		: 'click',
		stickTo     : 'right',
		size        : 32
	});
});

</script><?php }} ?>