<?php /* Smarty version Smarty-3.1.8, created on 2019-06-15 14:18:43
         compiled from "application/views\manager\characteristics\index.htm" */ ?>
<?php /*%%SmartyHeaderCode:147145d04e2237f3665-52159277%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca566062b6022d3b2be421e7fadaa32a647350c5' => 
    array (
      0 => 'application/views\\manager\\characteristics\\index.htm',
      1 => 1560601032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147145d04e2237f3665-52159277',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'rows' => 0,
    'filters' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5d04e2239d5fd1_21099953',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d04e2239d5fd1_21099953')) {function content_5d04e2239d5fd1_21099953($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include 'C:\\xampp\\htdocs\\mobile\\application\\third_party\\Smarty\\plugins\\modifier.date_format.php';
?><div class="section">

	<div class="create-btn">
		<a href="<?php echo @WEB_PATH;?>
manager/vehicule_characteristics/create" class="btn btn-create">Create</a>
	</div>
	<div class="clear"></div>



	<div class="search">
		<form method="get" action="">

			<fieldset>
				<legend>Search <?php if (isset($_smarty_tpl->tpl_vars['rows']->value)&&!empty($_smarty_tpl->tpl_vars['rows']->value)&&is_array($_smarty_tpl->tpl_vars['rows']->value)&&count($_smarty_tpl->tpl_vars['rows']->value)>0){?><?php echo count($_smarty_tpl->tpl_vars['rows']->value);?>
<?php }?></legend>
				<ul>
					<li>
						<label for="characteristic_name">Name: </label>
						<input class="form-control" type="text" name="characteristic_name" id="characteristic_name" value="<?php if (isset($_smarty_tpl->tpl_vars['filters']->value['characteristic_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['filters']->value['characteristic_name'], ENT_QUOTES, 'UTF-8', true);?>
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
			<th>Name</th>
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
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['characteristic_id'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['characteristic_name'];?>
</td>
			<td><?php echo $_smarty_tpl->tpl_vars['row']->value['characteristic_date_creation'];?>
</td>
			<td><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['row']->value['characteristic_date_modification'],'%Y/%m');?>
</td>
			<td style="text-align: center; color: red;">
				<strong><a class="edit" href="<?php echo @WEB_PATH;?>
manager/vehicule_characteristics/update/<?php echo $_smarty_tpl->tpl_vars['row']->value['characteristic_id'];?>
"></a></strong>
			</td>
		</tr>
		<?php } ?>
		</tbody>
	</table>
	<?php }else{ ?>
		<div>Not finded results!</div>
		<a href="<?php echo @WEB_PATH;?>
manager/vehicule_characteristics">View all results.</a>
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