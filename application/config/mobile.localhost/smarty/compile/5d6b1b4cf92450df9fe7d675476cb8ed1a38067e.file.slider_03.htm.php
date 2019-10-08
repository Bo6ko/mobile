<?php /* Smarty version Smarty-3.1.8, created on 2019-05-27 16:44:05
         compiled from "application/views\public\core\sliders\slider_03.htm" */ ?>
<?php /*%%SmartyHeaderCode:200355cebf7b56e86d9-76009072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5d6b1b4cf92450df9fe7d675476cb8ed1a38067e' => 
    array (
      0 => 'application/views\\public\\core\\sliders\\slider_03.htm',
      1 => 1484762628,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200355cebf7b56e86d9-76009072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'slides' => 0,
    'slide' => 0,
    'settings' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cebf7b57a8461_20062849',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cebf7b57a8461_20062849')) {function content_5cebf7b57a8461_20062849($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['slides']->value)&&is_array($_smarty_tpl->tpl_vars['slides']->value)&&count($_smarty_tpl->tpl_vars['slides']->value)>0){?>
<script type="text/javascript" src="<?php echo @WEB_PATH;?>
plugins/jquery.jssor/js/jssor.js"></script>
<script type="text/javascript" src="<?php echo @WEB_PATH;?>
plugins/jquery.jssor/js/jssor.slider.js"></script>
<script>
	jQuery(document).ready(function ($) {
	
		var options_desktop = {
			$FillMode: 2,									   //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
			$AutoPlay: true,									//[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
			$AutoPlayInterval: 4000,							//[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
			$PauseOnHover: 1,								   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1
	
			$ArrowKeyNavigation: true,   						//[Optional] Allows keyboard (arrow key) navigation or not, default value is false
			$SlideEasing: $JssorEasing$.$EaseOutQuint,		  //[Optional] Specifies easing for right to left animation, default value is $JssorEasing$.$EaseOutQuad
			$SlideDuration: 800,							   //[Optional] Specifies default duration (swipe) for slide in milliseconds, default value is 500
			$MinDragOffsetToSlide: 20,						  //[Optional] Minimum drag offset to trigger slide , default value is 20
			//$SlideWidth: 600,								 //[Optional] Width of every slide in pixels, default value is width of 'slides' container
			//$SlideHeight: 300,								//[Optional] Height of every slide in pixels, default value is height of 'slides' container
			$SlideSpacing: 0, 									//[Optional] Space between each slide in pixels, default value is 0
			$DisplayPieces: 1,								  //[Optional] Number of pieces to display (the slideshow would be disabled if the value is set to greater than 1), the default value is 1
			$ParkingPosition: 0,								//[Optional] The offset position to park slide (this options applys only when slideshow disabled), default value is 0.
			$UISearchMode: 1,								   //[Optional] The way (0 parellel, 1 recursive, default value is 1) to search UI components (slides container, loading screen, navigator container, arrow navigator container, thumbnail navigator container etc).
			$PlayOrientation: 1,								//[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
			$DragOrientation: 1,								//[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
	
	
			$BulletNavigatorOptions: {						  //[Optional] Options to specify and enable navigator or not
				$Class: $JssorBulletNavigator$,				 //[Required] Class to create navigator instance
				$ChanceToShow: 2,							   //[Required] 0 Never, 1 Mouse Over, 2 Always
				$AutoCenter: 1,								 //[Optional] Auto center navigator in parent container, 0 None, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
				$Steps: 1,									  //[Optional] Steps to go for each navigation request, default value is 1
				$Lanes: 1,									  //[Optional] Specify lanes to arrange items, default value is 1
				$SpacingX: 8,								   //[Optional] Horizontal space between each item in pixel, default value is 0
				$SpacingY: 8,								   //[Optional] Vertical space between each item in pixel, default value is 0
				$Orientation: 1								 //[Optional] The orientation of the navigator, 1 horizontal, 2 vertical, default value is 1
			},
	
			$ArrowNavigatorOptions: {						   //[Optional] Options to specify and enable arrow navigator or not
				$Class: $JssorArrowNavigator$,				  //[Requried] Class to create arrow navigator instance
				$ChanceToShow: 2,							   //[Required] 0 Never, 1 Mouse Over, 2 Always
				$AutoCenter: 2,								 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
				$Steps: 1									   //[Optional] Steps to go for each navigation request, default value is 1
			}
		};

		var jssor_slider_desktop = new $JssorSlider$("slider1_container", options_desktop);
		
		
		var options_mobile = {
            $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
            $PlayOrientation: 2,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
            $DragOrientation: 2,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

            $ArrowNavigatorOptions: {
                $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                $AutoCenter: 1,                                 //[Optional] Auto center arrows in parent container, 0 No, 1 Horizontal, 2 Vertical, 3 Both, default value is 0
                $Steps: 1                                       //[Optional] Steps to go for each navigation request, default value is 1
            }
        };
        var jssor_slider_mobile = new $JssorSlider$("slider1_container2", options_mobile);
		

	//	responsive code begin
	//	you can remove responsive code if you don't want the slider scales while window resizes
		function ScaleSlider() {
			var bodyWidth = document.body.clientWidth;
			if (bodyWidth) {
				if ( bodyWidth > 640 ) {
					jssor_slider_desktop.$ScaleWidth(Math.min(bodyWidth, 1920));
				}else{
					jssor_slider_mobile.$ScaleWidth(Math.min(bodyWidth, 640));
				}
			} else {
				window.setTimeout(ScaleSlider, 30);
			}
		}
		ScaleSlider();
		$(window).bind("load", ScaleSlider);
		$(window).bind("resize", ScaleSlider);
		$(window).bind("orientationchange", ScaleSlider);
	});
</script>

<div gamme id="slider1_container" style="position: relative; margin: 0 auto;top: 0px; left: 0px; width: 1920px; height: 680px; overflow: hidden;">

	<div u="loading" style="position: absolute; top: 0px; left: 0px;">
		<div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;"></div>
		<div style="position: absolute; display: block; background: url('/images/jssor/loading.gif') no-repeat center center;top: 0px; left: 0px; width: 100%; height: 100%;"></div>
	</div>
		
	<!-- slides -->
	<div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 1920px; height: 680px; overflow: hidden;">
		<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['s']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['g_desktop'])&&!empty($_smarty_tpl->tpl_vars['slide']->value['g_desktop'])){?>
		<div>
			<img u="image" src="<?php echo @WEB_PATH;?>
<?php echo $_smarty_tpl->tpl_vars['slide']->value['g_desktop'];?>
" />
			<div class="jsblock">
				
				<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['slide_link'])&&!empty($_smarty_tpl->tpl_vars['slide']->value['slide_link'])){?>
				<a class="link" href="<?php echo @WEB_PATH;?>
<?php echo $_smarty_tpl->tpl_vars['slide']->value['slide_link'];?>
"><?php echo $_smarty_tpl->tpl_vars['slide']->value['slide_title'];?>
</a>
				<?php }else{ ?>
				<?php echo $_smarty_tpl->tpl_vars['slide']->value['slide_title'];?>

				<?php }?>
				
				<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['slide_subtitle'])&&!empty($_smarty_tpl->tpl_vars['slide']->value['slide_subtitle'])){?><p><?php echo $_smarty_tpl->tpl_vars['slide']->value['slide_subtitle'];?>
</p><?php }?>
				
				<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['slide_link'])&&!empty($_smarty_tpl->tpl_vars['slide']->value['slide_link'])){?><a class="btn" href="<?php echo @WEB_PATH;?>
<?php echo $_smarty_tpl->tpl_vars['slide']->value['slide_link'];?>
"><i class="icon icon-lightning"></i> <?php echo $_smarty_tpl->tpl_vars['settings']->value['learn_more'];?>
</a><?php }?>
			</div>
        </div>
		<?php }?>
		<?php } ?>
	</div>
	
	<!-- arrows -->
	<style>
		.jsblock{position: absolute; bottom: 350px; width: 100%; height: 100px;  color: #ffffff; line-height: 60px;text-align:center;}
		.jsblock a.link{color:#fff;text-shadow: 1px 1px 0 #232323;font-size: 80px;font-weight: 500;}
		.jsblock a.btn{margin: 0 auto;font-size: 15px;text-transform: uppercase;padding: 15px 0px;max-width: 200px;line-height: 30px;margin-top: 15px;}
		.jsblock p{text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);font-size: 25px;font-weight: 300;font-style: italic !important;}
		.jssorb21 {position: absolute;}
		.jssorb21 div, .jssorb21 div:hover, .jssorb21 .av {position: absolute;width: 19px;height: 19px;text-align: center;line-height: 19px;color: white;font-size: 12px;background: url('/plugins/jquery.jssor/img/b21.png') no-repeat;overflow: hidden;cursor: pointer;}
		.jssorb21 div { background-position: -5px -5px; }
		.jssorb21 div:hover, .jssorb21 .av:hover { background-position: -35px -5px; }
		.jssorb21 .av { background-position: -65px -5px; }
		.jssorb21 .dn, .jssorb21 .dn:hover { background-position: -95px -5px; }
	</style>
	<div u="navigator" class="jssorb21" style="bottom: 26px; right: 6px;">
		<div u="prototype"></div>
	</div>
	
	<!-- bullets -->
	<style>
		/* jssor slider arrow navigator skin 22 css */
           
        .jssora22l, .jssora22r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 40px;
            height: 58px;
            cursor: pointer;
            background: url('/plugins/jquery.jssor/img/a22.png') center center no-repeat;
            overflow: hidden;
        }
        .jssora22l { background-position: -10px -31px; }
        .jssora22r { background-position: -70px -31px; }
        .jssora22l:hover { background-position: -130px -31px; }
        .jssora22r:hover { background-position: -190px -31px; }
        .jssora22l.jssora22ldn { background-position: -250px -31px; }
        .jssora22r.jssora22rdn { background-position: -310px -31px; }
            
	
		.jssora09l, .jssora09r {display: block;position: absolute;width: 50px;height: 50px;cursor: pointer;background: url('/plugins/jquery.jssor/img/a22.png') no-repeat;overflow: hidden;opacity: .4;filter: alpha(opacity=40);}
		.jssora09l { background-position: -5px -35px; }
		.jssora09r { background-position: -65px -35px; }
		.jssora09l:hover { background-position: -5px -35px; opacity: .8; filter:alpha(opacity=80); }
		.jssora09r:hover { background-position: -65px -35px; opacity: .8; filter:alpha(opacity=80); }
		.jssora09l.jssora09ldn { background-position: -5px -35px; opacity: .3; filter:alpha(opacity=30); }
		.jssora09r.jssora09rdn { background-position: -65px -35px; opacity: .3; filter:alpha(opacity=30); }
	</style>
	<span u="arrowleft" class="jssora22l" style="top: 123px; left: 8px;"></span>
	<span u="arrowright" class="jssora22r" style="top: 123px; right: 8px;"></span>
	
</div>

<div id="slider1_container2" style="position: relative; top: 0px; left: 0px; width: 640px; height: 480px;margin: 0 auto;">

    <!-- Loading Screen -->
    <div u="loading" style="position: absolute; top: 0px; left: 0px;">
        <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;background-color: #000000; top: 0px; left: 0px;width: 100%;height:100%;"></div>
        <div style="position: absolute; display: block; background: url('/images/jssor/loading.gif') no-repeat center center;top: 0px; left: 0px;width: 100%;height:100%;"></div>
    </div>

    <!-- Slides Container -->
    <div u="slides" style="cursor: move; position: absolute; left: 0px; top: 0px; width: 640px; height: 480px;overflow: hidden;">
    	<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_smarty_tpl->tpl_vars['s'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['s']->value = $_smarty_tpl->tpl_vars['slide']->key;
?>
		<?php if (isset($_smarty_tpl->tpl_vars['slide']->value['g_mobile'])&&!empty($_smarty_tpl->tpl_vars['slide']->value['g_mobile'])){?>
		<div><img u="image" src="<?php echo @WEB_PATH;?>
<?php echo $_smarty_tpl->tpl_vars['slide']->value['g_mobile'];?>
" /></div>
		<?php }?>
		<?php } ?>
    </div>
    
    <!--#region Arrow Navigator Skin Begin -->
    <!-- Help: http://www.jssor.com/development/slider-with-arrow-navigator-jquery.html -->
    <style>
        /* jssor slider arrow navigator skin 08 css */
        /*
        .jssora08l                  (normal)
        .jssora08r                  (normal)
        .jssora08l:hover            (normal mouseover)
        .jssora08r:hover            (normal mouseover)
        .jssora08l.jssora08ldn      (mousedown)
        .jssora08r.jssora08rdn      (mousedown)
        */
        .jssora08l, .jssora08r {
            display: block;
            position: absolute;
            /* size of arrow element */
            width: 50px;
            height: 50px;
            cursor: pointer;
            background: url('/plugins/jquery.jssor/img/a08.png') no-repeat;
            overflow: hidden;
            opacity: .4;
            filter: alpha(opacity=40);
        }
        .jssora08l { background-position: -5px -35px; }
        .jssora08r { background-position: -65px -35px; }
        .jssora08l:hover { background-position: -5px -35px; opacity: .8; filter:alpha(opacity=80); }
        .jssora08r:hover { background-position: -65px -35px; opacity: .8; filter:alpha(opacity=80); }
        .jssora08l.jssora08ldn { background-position: -5px -35px; opacity: .3; filter:alpha(opacity=30); }
        .jssora08r.jssora08rdn { background-position: -65px -35px; opacity: .3; filter:alpha(opacity=30); }
    </style>
    <span u="arrowleft" class="jssora08l" style="top: 8px; left: 8px;"></span>
    <span u="arrowright" class="jssora08r" style="bottom: 8px; left: 8px;"></span>
</div>
<?php }?>
<?php }} ?>