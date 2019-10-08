<?php /* Smarty version Smarty-3.1.8, created on 2019-06-15 21:37:53
         compiled from "application/views\manager\modeles\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:48755cf6c86c343978-80816790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '52b4e037fe4002af92423bf9c4807e8953bd72e7' => 
    array (
      0 => 'application/views\\manager\\modeles\\index.htm',
      1 => 1560627472,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48755cf6c86c343978-80816790',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cf6c86c497659_35407072',
  'variables' => 
  array (
    'rows' => 0,
    'marques' => 0,
    'marque' => 0,
    'filters' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6c86c497659_35407072')) {function content_5cf6c86c497659_35407072($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\mobile\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?><div class="section">

	<div class="create-btn">
		<a href="<?php echo @WEB_PATH;?>
manager/vehicule_modeles/create" class="btn btn-create">Create</a>
	</div>
	<div class="clear"></div>



	<div class="search">
		<form method="get" action="">

			<fieldset>
				<legend>Search <?php if (isset($_smarty_tpl->tpl_vars['rows']->value)&&!empty($_smarty_tpl->tpl_vars['rows']->value)&&is_array($_smarty_tpl->tpl_vars['rows']->value)&&count($_smarty_tpl->tpl_vars['rows']->value)>0){?><?php echo count($_smarty_tpl->tpl_vars['rows']->value);?>
<?php }?></legend>
				<ul>
					<li>
						<label for="marque_id">Marque: </label>
						<select id="marque_id" class="form-control" name="marque_id">
							<option value=""> - choise - </option>

							<?php if (isset($_smarty_tpl->tpl_vars['marques']->value)&&is_array($_smarty_tpl->tpl_vars['marques']->value)&&count($_smarty_tpl->tpl_vars['marques']->value)>0){?>
								<?php  $_smarty_tpl->tpl_vars['marque'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marque']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marques']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marque']->key => $_smarty_tpl->tpl_vars['marque']->value){
$_smarty_tpl->tpl_vars['marque']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['filters']->value['marque_id'])&&$_smarty_tpl->tpl_vars['filters']->value['marque_id']==$_smarty_tpl->tpl_vars['marque']->value['marque_id']){?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_name'];?>
</option>
								<?php } ?>
							<?php }?>
						</select>
					</li>

					<li>
						<label for="modele_name">Modele: </label>
						<input class="form-control" type="text" name="modele_name" id="modele_name" value="<?php if (isset($_smarty_tpl->tpl_vars['filters']->value['modele_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filters']->value['modele_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
					</li>

					<li>
						<label for="modele_slogan">Slogan: </label>
						<input class="form-control" type="text" name="modele_slogan" id="modele_slogan" value="<?php if (isset($_smarty_tpl->tpl_vars['filters']->value['modele_slogan'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filters']->value['modele_slogan'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" />
					</li>

					<li>
						<label for="from_date">From date: </label>
						<div class="form-group">
							<div class='input-group date' id='datepicker-from'>
								<input name="from_date" type='text' class="form-control" id="from_date" value="<?php if (isset($_smarty_tpl->tpl_vars['filters']->value['from_date'])){?><?php echo $_smarty_tpl->tpl_vars['filters']->value['from_date'];?>
<?php }?>" />
								<span class="input-group-addon">
		                        	<span class="glyphicon glyphicon-calendar"></span>
		                    	</span>
							</div>
						</div>
					</li>

					<li>
						<label for="to_date">То date: </label>
						<div class="form-group">
							<div class='input-group date' id='datepicker-to'>
								<input type='text' name="to_date" class="form-control" id="to_date" value="<?php if (isset($_smarty_tpl->tpl_vars['filters']->value['to_date'])){?><?php echo $_smarty_tpl->tpl_vars['filters']->value['to_date'];?>
<?php }?>"/>
								<span class="input-group-addon">
		                        	<span class="glyphicon glyphicon-calendar"></span>
		                    	</span>
							</div>
						</div>
					</li>

					<li>
						<input class="btn" type="submit" value="Search">
					</li>
					<div class="clear"></div>
				</ul>
			</fieldset>

		</form>
	</div>



	<?php if (isset($_smarty_tpl->tpl_vars['rows']->value)&&!empty($_smarty_tpl->tpl_vars['rows']->value)&&is_array($_smarty_tpl->tpl_vars['rows']->value)&&count($_smarty_tpl->tpl_vars['rows']->value)>0){?>
	<table class="grid" style="width: 100%; margin: 40px 0px;" border=1>
		<thead>
		<tr>
			<th>#</th>
			<th>Marque</th>
			<th>Modele</th>
			<th>Slogan</th>
			<th>Date created</th>
			<th>Date modified</th>
			<th></th>
		</tr>
		</thead>

		<tbody>
		<?php  $_smarty_tpl->tpl_vars['row'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['row']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['rows']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['row']->key => $_smarty_tpl->tpl_vars['row']->value){
$_smarty_tpl->tpl_vars['row']->_loop = true;
?>
		<tr>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modele_id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['marque_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modele_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modele_slogan'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modele_date_creation'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['modele_date_modification'],'%Y/%m');?>
</td>
			<td style="text-align: center; color: red;">
				<strong><a class="edit" href="<?php echo @WEB_PATH;?>
manager/vehicule_modeles/update/<?php echo $_smarty_tpl->tpl_vars['row']->value['modele_id'];?>
"></a></strong>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	<?php }else{ ?>
		<div>Not finded results!</div>
		<a href="<?php echo @WEB_PATH;?>
manager/vehicule_modeles">View all results.</a>
	<?php }?>


</div>

<script type="text/javascript" src="<?php echo @WEB_PATH;?>
js/manager/bootstrap-datepicker.min.js"></script>
<script >
	$(function () {
		$('#datepicker-from').datepicker({
			format: "yyyy-mm-dd",
			autoclose: true,
			todayHighlight: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			autoclose: true,
			changeMonth: true,
			changeYear: true,
			orientation: "button"
		});
	});

	$(function () {
		$('#datepicker-to').datepicker({
			format: "yyyy-mm-dd",
			autoclose: true,
			todayHighlight: true,
			showOtherMonths: true,
			selectOtherMonths: true,
			autoclose: true,
			changeMonth: true,
			changeYear: true,
			orientation: "button"
		});
	});
</script><?php }} ?>