<?php /* Smarty version Smarty-3.1.8, created on 2019-06-08 10:23:13
         compiled from "application/views\manager\equipements\update.htm" */ ?>
<?php /*%%SmartyHeaderCode:165615cfb70718841d9-17532384%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8a34598a50f32049e85de15fd3979ac4381ec55' => 
    array (
      0 => 'application/views\\manager\\equipements\\update.htm',
      1 => 1559981821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '165615cfb70718841d9-17532384',
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
  'unifunc' => 'content_5cfb7071915133_29244218',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfb7071915133_29244218')) {function content_5cfb7071915133_29244218($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_equipements" class="btn">View all equipements</a>
        <div class="clear"></div>
    </div>

    <div class="message" id="response"></div>

    <form method="post" action="">
        <fieldset>
            <legend>Update equipement</legend>
            <ul>
                <li>
                    <div class="d1"><label for="equipement_name">Name: </label></div>
                    <div class="d2"><input type="text" name="equipement_name" id="equipement_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['equipement_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['equipement_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['equipement_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['equipement_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" /></div>
                </li>

                <div id="update-equipement" class="update-btn btn">Update</div>
            </ul>
        </fieldset>
    </form>



</div>

<script>

    $(document).ready(function(){


        $("#update-equipement").on('click',function(){


            var response    = $("#response");

            response.html('izprashtane na zaqvka...').removeClass("error").removeClass("success");

            var button      = $(this);


            //   1
            var equipement_name     = $("#equipement_name").val();
            var data1 = {
                equipement_name     : equipement_name
            }
            console.log('-----------------------');
            console.log(data1);
            //    2
            //var holder          = button.parents('ul');
            var holder          = button.parents('fieldset');
            var equipement_name     = holder.find("input[name=equipement_name]").val();

            var data2 = {
                equipement_name     : equipement_name
            }
            console.log('-----------------------');
            console.log(data2);

            //    3
            var form          = button.parents('form');

            var data3          = form.serialize();

            console.log('-----------------------');
            console.log(data3);


            $.ajax({
                url			: 'http://mobile.localhost/manager/vehicule_equipements/ajax/<?php echo $_smarty_tpl->tpl_vars['data']->value['equipement_id'];?>
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