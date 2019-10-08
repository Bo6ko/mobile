<?php /* Smarty version Smarty-3.1.8, created on 2019-06-15 21:58:19
         compiled from "application/views\manager\characteristics\update.htm" */ ?>
<?php /*%%SmartyHeaderCode:290145d054ddb932304-98435722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b871cb3d9c120e56f424f9f20bab4c7a2976fecf' => 
    array (
      0 => 'application/views\\manager\\characteristics\\update.htm',
      1 => 1560601032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '290145d054ddb932304-98435722',
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
  'unifunc' => 'content_5d054ddb987f26_98649599',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d054ddb987f26_98649599')) {function content_5d054ddb987f26_98649599($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_characteristics" class="btn">View all characteristics</a>
        <div class="clear"></div>
    </div>

    <div class="message" id="response"></div>

    <form method="post" action="">
        <fieldset>
            <legend>Update characteristic</legend>
            <ul>
                <li>
                    <div class="d1"><label for="characteristic_name">Name: </label></div>
                    <div class="d2"><input type="text" name="characteristic_name" id="characteristic_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['characteristic_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['characteristic_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['characteristic_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['characteristic_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" /></div>
                </li>

                <div id="update-characteristic" class="update-btn btn">Update</div>
            </ul>
        </fieldset>
    </form>



</div>

<script>

    $(document).ready(function(){


        $("#update-characteristic").on('click',function(){


            var response    = $("#response");

            response.html('izprashtane na zaqvka...').removeClass("error").removeClass("success");

            var button      = $(this);


            //   1
            var characteristic_name     = $("#characteristic_name").val();
            var data1 = {
                characteristic_name     : characteristic_name
            }
            console.log('-----------------------');
            console.log(data1);
            //    2
            //var holder          = button.parents('ul');
            var holder          = button.parents('fieldset');
            var characteristic_name     = holder.find("input[name=characteristic_name]").val();

            var data2 = {
                characteristic_name     : characteristic_name
            }
            console.log('-----------------------');
            console.log(data2);

            //    3
            var form          = button.parents('form');

            var data3          = form.serialize();

            console.log('-----------------------');
            console.log(data3);


            $.ajax({
                url			: 'http://mobile.localhost/manager/vehicule_characteristics/ajax/<?php echo $_smarty_tpl->tpl_vars['data']->value['characteristic_id'];?>
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