<?php /* Smarty version Smarty-3.1.8, created on 2019-05-27 16:44:05
         compiled from "application/views\public\layers\search.htm" */ ?>
<?php /*%%SmartyHeaderCode:80905cebf7b53f07a2-21246055%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2ecac3f4865b4691150741a22c3813264c7e652a' => 
    array (
      0 => 'application/views\\public\\layers\\search.htm',
      1 => 1484901900,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '80905cebf7b53f07a2-21246055',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cebf7b53f3bd3_69460407',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebf7b53f3bd3_69460407')) {function content_5cebf7b53f3bd3_69460407($_smarty_tpl) {?><div class="layer search">
	<div class="section search wow bounceInLeft">
		<h2 class="box-header"><span>Notre stock</span> de véhicules d'occasion</h2>
		<div class="search-quick">
			<div class="filters">
				<div class="group wow slideInUp">
					<div class="filter select">
						<select name="marque_id" class="styled">
                            <option value="">Marque</option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                        </select>
					</div>
					<div class="filter select">
						<select name="modele_id" class="styled">
                            <option value="">Modèle</option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                        </select>
					</div>
				</div>
				<div class="group wow slideInDown">
					<div class="filter select">
						<select name="boite_id" class="styled">
                            <option value="">Transmission</option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                        </select>
					</div>
					<div class="filter select">
						<select name="energie_id" class="styled">
                            <option value="">Energie</option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                            <option value=""> option </option>
                        </select>
					</div>
				</div>
				<div class="group wow slideInUp">
					<div class="filter selects">
						<div class="alpha">
							<span>de</span>
							<select name="price_min" class="styled">
	                            <option value="">Prix (min)</option>
	                            <option>0</option>
								<option>10,000</option>
								<option>20,000</option>
								<option>30,000</option>
								<option>40,000</option>
								<option>50,000</option>
								<option>60,000</option>
								<option>70,000</option>
								<option>80,000</option>
								<option>90,000</option>
								<option>100,000</option>
								<option>120,000</option>
								<option>150,000</option>
	                        </select>
	                        <div class="clear"></div>
						</div>
						<div class="beta">
							<span>à</span>
							<select name="price_max" class="styled">
	                            <option value="">Prix (max)</option>
								<option>0</option>
								<option>10,000</option>
								<option>20,000</option>
								<option>30,000</option>
								<option>40,000</option>
								<option>50,000</option>
								<option>60,000</option>
								<option>70,000</option>
								<option>80,000</option>
								<option>90,000</option>
								<option>100,000</option>
								<option>120,000</option>
								<option>150,000</option>
	                        </select>
	                        <div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="filter selects">
						<div class="alpha">
							<span>de</span>
							<select name="year_min" class="styled">
	                            <option value="">Année (min)</option>
	                            <option>0</option>
								<option>2013</option>
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
	                        </select>
	                        <div class="clear"></div>
						</div>
						<div class="beta">
							<span>à</span>
							<select name="year_max" class="styled">
	                            <option value="">Année (max)</option>
								<option>2013</option>
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
	                        </select>
	                        <div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
				</div>
				<div class="group wow slideInDown">
					<div class="filter selects">
						<div class="alpha">
							<span>de</span>
							<select name="km_min" class="styled">
	                            <option value="">Km (min)</option>
	                            <option>0</option>
								<option>2013</option>
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
	                        </select>
	                        <div class="clear"></div>
						</div>
						<div class="beta">
							<span>à</span>
							<select name="km_max" class="styled">
	                            <option value="">Km (max)</option>
								<option>2013</option>
								<option>2014</option>
								<option>2015</option>
								<option>2016</option>
	                        </select>
	                        <div class="clear"></div>
						</div>
						<div class="clear"></div>
					</div>
					<div class="filter"><div class="core-button small">Recherche</div></div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</div><?php }} ?>