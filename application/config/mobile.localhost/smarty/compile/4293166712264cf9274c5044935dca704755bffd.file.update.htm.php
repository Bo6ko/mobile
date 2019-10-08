<?php /* Smarty version Smarty-3.1.8, created on 2019-06-08 09:42:37
         compiled from "application/views\manager\engines\update.htm" */ ?>
<?php /*%%SmartyHeaderCode:307585cfb66ed3b7ec5-22794062%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4293166712264cf9274c5044935dca704755bffd' => 
    array (
      0 => 'application/views\\manager\\engines\\update.htm',
      1 => 1559979494,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307585cfb66ed3b7ec5-22794062',
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
  'unifunc' => 'content_5cfb66ed480361_44596363',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfb66ed480361_44596363')) {function content_5cfb66ed480361_44596363($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_engines" class="btn">View all engines</a>
        <div class="clear"></div>
    </div>

    <div class="message" id="response"></div>

    <form method="post" action="">
        <fieldset>
            <legend>Update engine</legend>
            <ul>
                <li>
                    <div class="d1"><label for="engine_name">Name: </label></div>
                    <div class="d2"><input type="text" name="engine_name" id="engine_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['engine_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['engine_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['engine_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['engine_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" /></div>
                </li>

                <div id="update-engine" class="update-btn btn">Update</div>
            </ul>
        </fieldset>
    </form>



</div>

<script>

    $(document).ready(function(){


        $("#update-engine").on('click',function(){


            var response    = $("#response");

            response.html('izprashtane na zaqvka...').removeClass("error").removeClass("success");

            var button      = $(this);


            //   1
            var engine_name     = $("#engine_name").val();
            var data1 = {
                engine_name     : engine_name
            }
            console.log('-----------------------');
            console.log(data1);
            //    2
            //var holder          = button.parents('ul');
            var holder          = button.parents('fieldset');
            var engine_name     = holder.find("input[name=engine_name]").val();

            var data2 = {
                engine_name     : engine_name
            }
            console.log('-----------------------');
            console.log(data2);

            //    3
            var form          = button.parents('form');

            var data3          = form.serialize();

            console.log('-----------------------');
            console.log(data3);


            $.ajax({
                url			: 'http://mobile.localhost/manager/vehicule_engines/ajax/<?php echo $_smarty_tpl->tpl_vars['data']->value['engine_id'];?>
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