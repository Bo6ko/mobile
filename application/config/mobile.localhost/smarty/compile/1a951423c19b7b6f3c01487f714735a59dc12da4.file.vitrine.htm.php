<?php /* Smarty version Smarty-3.1.8, created on 2019-05-27 16:44:05
         compiled from "application/views\public\layers\vitrine.htm" */ ?>
<?php /*%%SmartyHeaderCode:42995cebf7b53ffb62-25640720%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1a951423c19b7b6f3c01487f714735a59dc12da4' => 
    array (
      0 => 'application/views\\public\\layers\\vitrine.htm',
      1 => 1484209418,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '42995cebf7b53ffb62-25640720',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cebf7b5404a68_34717103',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebf7b5404a68_34717103')) {function content_5cebf7b5404a68_34717103($_smarty_tpl) {?><div class="layer vitrine">
	<div class="section"><h2 class="box-header">Notre stock de véhicules d'occasion</h2></div>
	
	<div class="owl-carousel owl-theme">
		
		<div class="item car-box">
			<img src="/images/mercedes_benz_c_class.jpg" alt="mercedes_benz_c_class">
            <div class="car-content">
                <div class="car-title">
                	<h3><a href="javascript:void(0);">Mercedes Benz C Class</a><span>42,650 &euro;</span></h3>
                </div>
                <a href="javascript:void(0);" class="core-button small">détails</a>
            </div>
		</div>
		
		<div class="item car-box">
			<img src="/images/audi_q7_2017.jpg" alt="mercedes_benz_c_class">
            <div class="car-content">
                <div class="car-title">
                	<h3><a href="javascript:void(0);">Mercedes Benz C Class</a><span>42,650 &euro;</span></h3>
                </div>
                <a href="javascript:void(0);" class="core-button small">détails</a>
            </div>
		</div>
		
		<div class="item car-box">
			<img src="/images/mclaren_650S.jpg" alt="mercedes_benz_c_class">
            <div class="car-content">
                <div class="car-title">
                	<h3><a href="javascript:void(0);">Mercedes Benz C Class</a><span>42,650 &euro;</span></h3>
                </div>
                <a href="javascript:void(0);" class="core-button small">détails</a>
            </div>
		</div>
		
		<div class="item car-box">
			<img src="/images/porsche_cayen_cast.jpg" alt="mercedes_benz_c_class">
            <div class="car-content">
                <div class="car-title">
                	<h3><a href="javascript:void(0);">Mercedes Benz C Class</a><span>42,650 &euro;</span></h3>
                </div>
                <a href="javascript:void(0);" class="core-button small">détails</a>
            </div>
		</div>
		
		<div class="item car-box">
			<img src="/images/mclaren_650S.jpg" alt="mercedes_benz_c_class">
            <div class="car-content">
                <div class="car-title">
                	<h3><a href="javascript:void(0);">Mercedes Benz C Class</a><span>42,650 &euro;</span></h3>
                </div>
                <a href="javascript:void(0);" class="core-button small">détails</a>
            </div>
		</div>
		
		<div class="item car-box">
			<img src="/images/mercedes_benz_c_class.jpg" alt="mercedes_benz_c_class">
            <div class="car-content">
                <div class="car-title">
                	<h3><a href="javascript:void(0);">Mercedes Benz C Class</a><span>42,650 &euro;</span></h3>
                </div>
                <a href="javascript:void(0);" class="core-button small">détails</a>
            </div>
		</div>
		
		<div class="item car-box">
			<img src="/images/mercedes_benz_c_class.jpg" alt="mercedes_benz_c_class">
            <div class="car-content">
                <div class="car-title">
                	<h3><a href="javascript:void(0);">Mercedes Benz C Class</a><span>42,650 &euro;</span></h3>
                </div>
                <a href="javascript:void(0);" class="core-button small">détails</a>
            </div>
		</div>
		
		<div class="item car-box">
			<img src="/images/audi_q7_2017.jpg" alt="mercedes_benz_c_class">
            <div class="car-content">
                <div class="car-title">
                	<h3><a href="javascript:void(0);">Mercedes Benz C Class</a><span>42,650 &euro;</span></h3>
                </div>
                <a href="javascript:void(0);" class="core-button small">détails</a>
            </div>
		</div>
		
		<div class="item car-box">
			<img src="/images/mercedes_benz_c_class.jpg" alt="mercedes_benz_c_class">
            <div class="car-content">
                <div class="car-title">
                	<h3><a href="javascript:void(0);">Mercedes Benz C Class</a><span>42,650 &euro;</span></h3>
                </div>
                <a href="javascript:void(0);" class="core-button small">détails</a>
            </div>
		</div>
		
	</div>
</div>

<script>


	$(document).ready(function() {
		
		var owl = $('.owl-carousel');
		owl.owlCarousel({
		    loop : true,
			margin : 10,
			responsiveClass : true,
			responsive : {
				0 : {
					items : 1,
					nav : true
				},
				600 : {
					items : 3
				},
				900 : {
					items : 4
				},
				1200 : {
					items : 5
				},
				1500 : {
					items : 6,
					nav : false
				}
			}
		});
		owl.on('mousewheel', '.owl-stage', function (e) {
		    if (e.deltaY>0) {
		        owl.trigger('next.owl');
		    } else {
		        owl.trigger('prev.owl');
		    }
		    e.preventDefault();
		});
		
		
	});
	

</script><?php }} ?>