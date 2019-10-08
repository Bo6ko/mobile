<?php /* Smarty version Smarty-3.1.8, created on 2019-06-08 10:03:27
         compiled from "application/views\manager\carrosseries\update.htm" */ ?>
<?php /*%%SmartyHeaderCode:140385cfb6bcf03d330-61558257%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f2b2d85a209201d034a0fe6fc02f8aedf2cd13a0' => 
    array (
      0 => 'application/views\\manager\\carrosseries\\update.htm',
      1 => 1559980702,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '140385cfb6bcf03d330-61558257',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'post' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cfb6bcf0cfb48_98011862',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfb6bcf0cfb48_98011862')) {function content_5cfb6bcf0cfb48_98011862($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_carrosseries" class="btn">View all carrosseries</a>
        <div class="clear"></div>
    </div>

    <div class="message" id="response"></div>

    <form method="post" action="">
        <fieldset>
            <legend>Update carrosserie</legend>
            <ul>
                <li>
                    <div class="d1"><label for="carrosserie_name">Name: </label></div>
                    <div class="d2"><input type="text" name="carrosserie_name" id="carrosserie_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['carrosserie_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['carrosserie_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['carrosserie_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['carrosserie_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" /></div>
                </li>

                <div id="update-carrosserie" class="update-btn btn">Update</div>
            </ul>
        </fieldset>
    </form>



</div>

<script>

    $(document).ready(function(){


        $("#update-carrosserie").on('click',function(){


            var response    = $("#response");

            response.html('izprashtane na zaqvka...').removeClass("error").removeClass("success");

            var button      = $(this);


            //   1
            var carrosserie_name     = $("#carrosserie_name").val();
            var data1 = {
                carrosserie_name     : carrosserie_name
            }
            console.log('-----------------------');
            console.log(data1);
            //    2
            //var holder          = button.parents('ul');
            var holder          = button.parents('fieldset');
            var carrosserie_name     = holder.find("input[name=carrosserie_name]").val();

            var data2 = {
                carrosserie_name     : carrosserie_name
            }
            console.log('-----------------------');
            console.log(data2);

            //    3
            var form          = button.parents('form');

            var data3          = form.serialize();

            console.log('-----------------------');
            console.log(data3);


            $.ajax({
                url			: 'http://mobile.localhost/manager/vehicule_carrosseries/ajax/<?php echo $_smarty_tpl->tpl_vars['data']->value['carrosserie_id'];?>
',
                type		: "POST",
                dataType	: "json",
                data		: data3,
                success		: function( json ) {


                    if ( json.status ) {
                        // true
                        response.addClass("success");
                    } else{
                        // false
                        response.addClass("error");
                    }

                    response.html( json.message );

                    console.log(json);


                },
                error		: function(error) {
                    console.log(error);
                    console.log(error.responseText);
                }
            });
        });

    });

</script><?php }} ?>