<?php /* Smarty version Smarty-3.1.8, created on 2019-06-04 22:17:51
         compiled from "application/views\manager\marques\update_ajax.htm" */ ?>
<?php /*%%SmartyHeaderCode:180805cf55f64ac4630-88997325%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a1903a0c6a0f091e68975ba1e237a9c1736a1432' => 
    array (
      0 => 'application/views\\manager\\marques\\update_ajax.htm',
      1 => 1559592377,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180805cf55f64ac4630-88997325',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cf55f64bdf972_85012510',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf55f64bdf972_85012510')) {function content_5cf55f64bdf972_85012510($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_marques" class="btn" role="button"><span>View all marks</span></a>
    </div>
    <div class="clear"></div>

    <div class="message" id="response"></div>

    <fieldset>
        <legend>Update marque</legend>

        <form>
            <ul>
                <li>
                    <div class="d1"><label for="marque_name">Name: </label></div>
                    <div class="d2"><input type="text" name="marque_name" id="marque_name" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['marque_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['marque_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>


                <li>
                    <div class="d1"><label for="marque_slogan">Slogan: </label></div>
                    <div class="d2"><input type="text" name="marque_slogan" id="marque_slogan" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['marque_slogan'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['marque_slogan'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <div id="update-marque">Update</div>

            </ul>
        </form>

    </fieldset>


    <div class="clear"></div>


</div>

<script>

    $(document).ready(function(){


        $("#update-marque").on('click',function(){


            var response    = $("#response");

            response.html('izprashtane na zaqvka...').removeClass("error").removeClass("success");

            var button      = $(this);


        //   1
            var marque_name     = $("#marque_name").val();
            var marque_slogan   = $("#marque_slogan").val();
            var data1 = {
                marque_name     : marque_name,
                marque_slogan   : marque_slogan,
            }
            console.log('-----------------------');
            console.log(data1);
        //    2
            //var holder          = button.parents('ul');
            var holder          = button.parents('fieldset');
            var marque_name     = holder.find("input[name=marque_name]").val();
            var marque_slogan   = holder.find("input[name=marque_slogan]").val();

            var data2 = {
                marque_name     : marque_name,
                marque_slogan   : marque_slogan
            }
            console.log('-----------------------');
            console.log(data2);

        //    3
            var form          = button.parents('form');

            var data3          = form.serialize();

            console.log('-----------------------');
            console.log(data3);


            $.ajax({
                url			: 'http://mobile.localhost/manager/vehicule_marques/ajax/<?php echo $_smarty_tpl->tpl_vars['data']->value['marque_id'];?>
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