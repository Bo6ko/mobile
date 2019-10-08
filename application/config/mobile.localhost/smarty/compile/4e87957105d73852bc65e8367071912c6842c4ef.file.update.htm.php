<?php /* Smarty version Smarty-3.1.8, created on 2019-06-16 09:46:53
         compiled from "application/views\manager\modeles\update.htm" */ ?>
<?php /*%%SmartyHeaderCode:212785cf6d97e881128-32210979%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e87957105d73852bc65e8367071912c6842c4ef' => 
    array (
      0 => 'application/views\\manager\\modeles\\update.htm',
      1 => 1560671211,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '212785cf6d97e881128-32210979',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cf6d97e93a0c9_62838818',
  'variables' => 
  array (
    'marques' => 0,
    'marque' => 0,
    'post' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6d97e93a0c9_62838818')) {function content_5cf6d97e93a0c9_62838818($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_modeles" class="btn">View all modeles</a>
        <div class="clear"></div>
    </div>

    <div class="message" id="response"></div>

    <form method="post" action="">
        <fieldset>
            <legend>Update modele</legend>
            <ul>
                <li>
                    <div class="d1"><label for="marque_id">Marque: </label></div>
                    <div class="d2">
                        <select id="marque_id" class="form-control" name="marque_id">
                            <option value=""> - choise - </option>

                            <?php if (isset($_smarty_tpl->tpl_vars['marques']->value)&&is_array($_smarty_tpl->tpl_vars['marques']->value)&&count($_smarty_tpl->tpl_vars['marques']->value)>0){?>
                                <?php  $_smarty_tpl->tpl_vars['marque'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marque']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marques']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marque']->key => $_smarty_tpl->tpl_vars['marque']->value){
$_smarty_tpl->tpl_vars['marque']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value)&&$_smarty_tpl->tpl_vars['post']->value['marque_id']==$_smarty_tpl->tpl_vars['marque']->value['marque_id']){?><?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['marque_id']==$_smarty_tpl->tpl_vars['marque']->value['marque_id']){?>selected="selected"<?php }?><?php }?> ><?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_name'];?>
</option>
                                <?php } ?>
                            <?php }?>
                        </select>
                    </div>
                </li>

                <li>
                    <div class="d1"><label for="modele_name">Name: </label></div>
                    <div class="d2"><input type="text" name="modele_name" class="form-control" id="modele_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['modele_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['modele_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['modele_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['modele_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" /></div>
                </li>


                <li>
                    <div class="d1"><label for="modele_slogan">Slogan: </label></div>
                    <div class="d2"><input type="text" name="modele_slogan" class="form-control" id="modele_slogan" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['modele_slogan'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['modele_slogan'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <div id="update-modele" class="update-btn btn">Update</div>
            </ul>
        </fieldset>
    </form>



</div>

<script>

    $(document).ready(function(){


        $("#update-modele").on('click',function(){


            var response    = $("#response");

            response.html('izprashtane na zaqvka...').removeClass("error").removeClass("success");

            var button      = $(this);


            //   1
            var modele_name     = $("#modele_name").val();
            var modele_slogan   = $("#modele_slogan").val();
            var data1 = {
                modele_name     : modele_name,
                modele_slogan   : modele_slogan,
            }
            console.log('-----------------------');
            console.log(data1);
            //    2
            //var holder          = button.parents('ul');
            var holder          = button.parents('fieldset');
            var modele_name     = holder.find("input[name=modele_name]").val();
            var modele_slogan   = holder.find("input[name=modele_slogan]").val();

            var data2 = {
                modele_name     : modele_name,
                modele_slogan   : modele_slogan
            }
            console.log('-----------------------');
            console.log(data2);

            //    3
            var form          = button.parents('form');

            var data3          = form.serialize();

            console.log('-----------------------');
            console.log(data3);


            $.ajax({
                url			: 'http://mobile.localhost/manager/vehicule_modeles/ajax/<?php echo $_smarty_tpl->tpl_vars['data']->value['modele_id'];?>
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