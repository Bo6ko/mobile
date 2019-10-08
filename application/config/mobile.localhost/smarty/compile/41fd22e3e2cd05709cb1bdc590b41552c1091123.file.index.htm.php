<?php /* Smarty version Smarty-3.1.8, created on 2019-06-20 09:52:43
         compiled from "application/views\manager\vehicules\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:270985cfbbda7647ce1-96848424%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '41fd22e3e2cd05709cb1bdc590b41552c1091123' => 
    array (
      0 => 'application/views\\manager\\vehicules\\index.htm',
      1 => 1560976200,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '270985cfbbda7647ce1-96848424',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cfbbda7ceca59_22803970',
  'variables' => 
  array (
    'rows' => 0,
    'marques' => 0,
    'marque' => 0,
    'filters' => 0,
    'modeles' => 0,
    'modele' => 0,
    'engines' => 0,
    'engine' => 0,
    'carrosseries' => 0,
    'carrosserie' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfbbda7ceca59_22803970')) {function content_5cfbbda7ceca59_22803970($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\mobile\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?><div class="section">

	<div class="create-btn">
		<a href="<?php echo @WEB_PATH;?>
manager/vehicules/create" class="btn btn-create">Create</a>
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
							<option value=""> - choose - </option>

							<?php if (isset($_smarty_tpl->tpl_vars['marques']->value)&&is_array($_smarty_tpl->tpl_vars['marques']->value)&&count($_smarty_tpl->tpl_vars['marques']->value)>0){?>
								<?php  $_smarty_tpl->tpl_vars['marque'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marque']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marques']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marque']->key => $_smarty_tpl->tpl_vars['marque']->value){
$_smarty_tpl->tpl_vars['marque']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['filters']->value['marque_id'])&&$_smarty_tpl->tpl_vars['filters']->value['marque_id']==$_smarty_tpl->tpl_vars['marque']->value['marque_id']){?>selected="selected"<?php }?>  ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['marque']->value['marque_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php } ?>
							<?php }?>

						</select><br/>
					</li>

					<li>
						<label for="modele_id">Modele: </label>
						<select id="modele_id" class="form-control" name="modele_id">
							<option value=""> - choose - </option>

							<?php if (isset($_smarty_tpl->tpl_vars['modeles']->value)&&is_array($_smarty_tpl->tpl_vars['modeles']->value)&&count($_smarty_tpl->tpl_vars['modeles']->value)>0){?>
								<?php  $_smarty_tpl->tpl_vars['modele'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modele']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modeles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modele']->key => $_smarty_tpl->tpl_vars['modele']->value){
$_smarty_tpl->tpl_vars['modele']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['modele']->value['modele_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['filters']->value['modele_id'])&&$_smarty_tpl->tpl_vars['filters']->value['modele_id']==$_smarty_tpl->tpl_vars['modele']->value['modele_id']){?>selected="selected"<?php }?>  ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modele']->value['modele_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php } ?>
							<?php }?>

						</select><br/>
					</li>

					<li>
						<label for="engine_id">Engine: </label>
						<select id="engine_id" class="form-control" name="engine_id">
							<option value=""> - choose - </option>

							<?php if (isset($_smarty_tpl->tpl_vars['engines']->value)&&is_array($_smarty_tpl->tpl_vars['engines']->value)&&count($_smarty_tpl->tpl_vars['engines']->value)>0){?>
								<?php  $_smarty_tpl->tpl_vars['engine'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['engine']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['engines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['engine']->key => $_smarty_tpl->tpl_vars['engine']->value){
$_smarty_tpl->tpl_vars['engine']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['engine']->value['engine_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['filters']->value['engine_id'])&&$_smarty_tpl->tpl_vars['filters']->value['engine_id']==$_smarty_tpl->tpl_vars['modele']->value['engine_id']){?>selected="selected"<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['engine']->value['engine_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php } ?>
							<?php }?>
						</select><br/>
					</li>

					<li>
						<label for="carrosserie_id">Carrosserie: </label>
						<select id="carrosserie_id" class="form-control" name="carrosserie_id">
							<option value=""> - choose - </option>

							<?php if (isset($_smarty_tpl->tpl_vars['carrosseries']->value)&&is_array($_smarty_tpl->tpl_vars['carrosseries']->value)&&count($_smarty_tpl->tpl_vars['carrosseries']->value)>0){?>
								<?php  $_smarty_tpl->tpl_vars['carrosserie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrosserie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrosseries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrosserie']->key => $_smarty_tpl->tpl_vars['carrosserie']->value){
$_smarty_tpl->tpl_vars['carrosserie']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['filters']->value['carrosserie_id'])&&$_smarty_tpl->tpl_vars['filters']->value['carrosserie_id']==$_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id']){?>select="selected"<?php }?> ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
								<?php } ?>
							<?php }?>
						</select><br/>
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
			<th>Marque slogan</th>
			<th>Modele name</th>
			<th>Modele slogan</th>
			<th>Engine name</th>
			<th>Carrosserie name</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['vehicule_id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['marque_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['marque_slogan'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modele_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modele_slogan'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['engine_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['carrosserie_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['modele_date_creation'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['modele_date_modification'],'%Y/%m');?>
</td>
			<td style="text-align: center; color: red;">
				<strong><a class="edit" href="<?php echo @WEB_PATH;?>
manager/vehicules/update/<?php echo $_smarty_tpl->tpl_vars['row']->value['vehicule_id'];?>
"></a></strong>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	<?php }else{ ?>
		<div>Not finded results!</div>
		<a href="<?php echo @WEB_PATH;?>
manager/vehicules">View all results.</a>
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