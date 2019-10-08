<?php /* Smarty version Smarty-3.1.8, created on 2019-09-03 22:18:04
         compiled from "application/views\manager\vehicules\update.htm" */ ?>
<?php /*%%SmartyHeaderCode:35695cfcedcd478842-10462035%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b9ba05c5931ce29bab9f2df68992ace1b7768a25' => 
    array (
      0 => 'application/views\\manager\\vehicules\\update.htm',
      1 => 1561269542,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '35695cfcedcd478842-10462035',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cfcedcd5e4912_22014741',
  'variables' => 
  array (
    'marques' => 0,
    'marque' => 0,
    'post' => 0,
    'data' => 0,
    'modeles' => 0,
    'modele' => 0,
    'engines' => 0,
    'engine' => 0,
    'carrosseries' => 0,
    'carrosserie' => 0,
    'equipements' => 0,
    'equipement' => 0,
    'equipements_selected' => 0,
    'characteristics' => 0,
    'characteristic' => 0,
    'characteristics_selected' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfcedcd5e4912_22014741')) {function content_5cfcedcd5e4912_22014741($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicules" class="btn">View all vehicules</a>
        <div class="clear"></div>
    </div>

    <div class="message" id="response"></div>

    <form method="post" action="">
        <fieldset>
            <legend>Update modele</legend>
            <ul>
                <li>
                    <label for="marque_id">Choose marque: </label>
                    <select id="marque_id" class="form-control" name="marque_id">
                        <option value=""> - choose - </option>

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
                    </select><br/>
                </li>

                <li>
                    <label for="modele_id">Choose modele: </label>
                    <select id="modele_id" class="form-control" name="modele_id">
                        <option value=""> - choose - </option>

                        <?php if (isset($_smarty_tpl->tpl_vars['modeles']->value)&&is_array($_smarty_tpl->tpl_vars['modeles']->value)&&count($_smarty_tpl->tpl_vars['modeles']->value)>0){?>
                            <?php  $_smarty_tpl->tpl_vars['modele'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modele']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modeles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modele']->key => $_smarty_tpl->tpl_vars['modele']->value){
$_smarty_tpl->tpl_vars['modele']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['modele']->value['modele_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value)&&$_smarty_tpl->tpl_vars['post']->value['modele_id']==$_smarty_tpl->tpl_vars['modele']->value['modele']){?><?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['modele_id']==$_smarty_tpl->tpl_vars['modele']->value['modele_id']){?>selected="selected"<?php }?><?php }?> ><?php echo $_smarty_tpl->tpl_vars['modele']->value['modele_name'];?>
</option>
                            <?php } ?>
                        <?php }?>
                    </select><br/>
                </li>

                <li>
                    <label for="engine_id">Choose engine: </label>
                    <select id="engine_id" class="form-control" name="engine_id">
                        <option value=""> - choose - </option>

                        <?php if (isset($_smarty_tpl->tpl_vars['engines']->value)&&is_array($_smarty_tpl->tpl_vars['engines']->value)&&count($_smarty_tpl->tpl_vars['engines']->value)>0){?>
                            <?php  $_smarty_tpl->tpl_vars['engine'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['engine']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['engines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['engine']->key => $_smarty_tpl->tpl_vars['engine']->value){
$_smarty_tpl->tpl_vars['engine']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['engine']->value['engine_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value)&&$_smarty_tpl->tpl_vars['post']->value['engine_id']==$_smarty_tpl->tpl_vars['engine']->value['engine']){?><?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['engine_id']==$_smarty_tpl->tpl_vars['engine']->value['engine_id']){?>selected="selected"<?php }?><?php }?> ><?php echo $_smarty_tpl->tpl_vars['engine']->value['engine_name'];?>
</option>
                            <?php } ?>
                        <?php }?>
                    </select><br/>
                </li>

                <li>
                    <label for="carrosserie_id">Choose carrosserie: </label>
                    <select id="carrosserie_id" class="form-control" name="carrosserie_id">
                        <option value=""> - choose - </option>

                        <?php if (isset($_smarty_tpl->tpl_vars['carrosseries']->value)&&is_array($_smarty_tpl->tpl_vars['carrosseries']->value)&&count($_smarty_tpl->tpl_vars['carrosseries']->value)>0){?>
                            <?php  $_smarty_tpl->tpl_vars['carrosserie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrosserie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrosseries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrosserie']->key => $_smarty_tpl->tpl_vars['carrosserie']->value){
$_smarty_tpl->tpl_vars['carrosserie']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value)&&$_smarty_tpl->tpl_vars['post']->value['carrosserie_id']==$_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie']){?><?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value)&&$_smarty_tpl->tpl_vars['data']->value['carrosserie_id']==$_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id']){?>selected="selected"<?php }?><?php }?> ><?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_name'];?>
</option>
                            <?php } ?>
                        <?php }?>
                    </select><br/>
                </li>

                <div id="update-vehicule" class="update-btn btn">Update</div>
            </ul>
        </fieldset>
    </form>

    <hr>
    <h2>Equipements</h2>
    <div class="message" id="response-equipement"></div>
    <form method="post" action="">
        <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['equipements']->value)&&is_array($_smarty_tpl->tpl_vars['equipements']->value)&&count($_smarty_tpl->tpl_vars['equipements']->value)>0){?>
                <?php  $_smarty_tpl->tpl_vars['equipement'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['equipement']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['equipements']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['equipement']->key => $_smarty_tpl->tpl_vars['equipement']->value){
$_smarty_tpl->tpl_vars['equipement']->_loop = true;
?>
                    <li>
                        <input type="checkbox" name="equipements_id[]" value="<?php echo $_smarty_tpl->tpl_vars['equipement']->value['equipement_id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['equipements_selected']->value)&&is_array($_smarty_tpl->tpl_vars['equipements_selected']->value)&&in_array($_smarty_tpl->tpl_vars['equipement']->value['equipement_id'],$_smarty_tpl->tpl_vars['equipements_selected']->value))){?> checked="checked" <?php }?> > <?php echo $_smarty_tpl->tpl_vars['equipement']->value['equipement_name'];?>
 / <?php echo $_smarty_tpl->tpl_vars['equipement']->value['equipement_id'];?>

                    </li>
                <?php } ?>
            <?php }?>

            <div id="update-equipements" class="update-btn btn">Update</div>
            <div class="clear"></div>
        </ul>
    </form>

    <hr>
    <h2>Caracteristics</h2>
    <div class="message" id="response-characteristic"></div>
    <form method="post" action="">
        <ul>
            <?php if (isset($_smarty_tpl->tpl_vars['characteristics']->value)&&is_array($_smarty_tpl->tpl_vars['characteristics']->value)&&count($_smarty_tpl->tpl_vars['characteristics']->value)>0){?>
                <?php  $_smarty_tpl->tpl_vars['characteristic'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['characteristic']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['characteristics']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['characteristic']->key => $_smarty_tpl->tpl_vars['characteristic']->value){
$_smarty_tpl->tpl_vars['characteristic']->_loop = true;
?>
                    <li>
                        <!-- <?php echo var_dump($_smarty_tpl->tpl_vars['characteristic']->value);?>
 -->
                        <input type="checkbox" name="characteristics_id[]" value="<?php echo $_smarty_tpl->tpl_vars['characteristic']->value['characteristic_id'];?>
" <?php if ((isset($_smarty_tpl->tpl_vars['characteristics_selected']->value)&&is_array($_smarty_tpl->tpl_vars['characteristics_selected']->value)&&in_array($_smarty_tpl->tpl_vars['characteristic']->value['characteristic_id'],$_smarty_tpl->tpl_vars['characteristics_selected']->value))){?> checked="checkeddsda" <?php }?> > <?php echo $_smarty_tpl->tpl_vars['characteristic']->value['characteristic_name'];?>
 /  <?php echo $_smarty_tpl->tpl_vars['characteristic']->value['characteristic_id'];?>


                        <input type="text" id="desc-characteristic-id<?php echo $_smarty_tpl->tpl_vars['characteristic']->value['characteristic_id'];?>
" name="characteristics[<?php echo $_smarty_tpl->tpl_vars['characteristic']->value['characteristic_id'];?>
][description]" value="<?php if ((isset($_smarty_tpl->tpl_vars['characteristics_selected']->value)&&is_array($_smarty_tpl->tpl_vars['characteristics_selected']->value)&&in_array($_smarty_tpl->tpl_vars['characteristic']->value['characteristic_id'],$_smarty_tpl->tpl_vars['characteristics_selected']->value))){?> <?php echo $_smarty_tpl->tpl_vars['characteristics_selected']->value['description'][$_smarty_tpl->tpl_vars['characteristic']->value['characteristic_id']];?>
 <?php }?>" <?php if ((isset($_smarty_tpl->tpl_vars['characteristics_selected']->value)&&is_array($_smarty_tpl->tpl_vars['characteristics_selected']->value)&&in_array($_smarty_tpl->tpl_vars['characteristic']->value['characteristic_id'],$_smarty_tpl->tpl_vars['characteristics_selected']->value))){?> <?php }else{ ?> disabled="disabled" <?php }?>>

                    </li>
                <?php } ?>
            <?php }?>
            <div id="update-characteristics" class="update-btn btn">Update</div>
            <div class="clear"></div>
        </ul>
    </form>

</div>

<script type="text/javascript">

    $(":checkbox").change('click', function () {

        var characteristicID = $(this).val();
        var descCharacteristic = $("#desc-characteristic-id" + characteristicID);
        if ($(this).prop("checked") == true) {
            descCharacteristic.removeAttr("disabled");
        } else {
            descCharacteristic.attr("disabled", "disabled");
        }

    });

</script>

<script>

    $(document).ready(function(){


        $("#update-vehicule").on('click',function(){


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
            var form            = button.parents('form');

            var data3           = form.serialize();

            console.log('-----------------------');
            console.log(data3);


            $.ajax({
                url			: 'http://mobile.localhost/manager/vehicules/ajax/<?php echo $_smarty_tpl->tpl_vars['data']->value['vehicule_id'];?>
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

</script>

<script>

    $(document).ready(function(){

        $("#update-equipements").on('click',function(){


            var response    = $("#response-equipement");

            response.html('izprashtane na zaqvka...').removeClass("error").removeClass("success");

            var button      = $(this);

            //    3
            var form          = button.parents('form');

            var data3          = form.serialize();

            console.log('-----------------------');
            console.log(data3);

            $.ajax({
                url			: 'http://mobile.localhost/manager/vehicules_equipements/update/<?php echo $_smarty_tpl->tpl_vars['data']->value['vehicule_id'];?>
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

</script>

<script>

    $(document).ready(function(){

        $("#update-characteristics").on('click',function(){


            var response    = $("#response-characteristic");

            response.html('izprashtane na zaqvka...').removeClass("error").removeClass("success");

            var button      = $(this);

            //    3
            var form        = button.parents('form');

            var data3       = form.serialize();

            console.log('-----------------------');
            console.log(data3);

            $.ajax({
                url			: 'http://mobile.localhost/manager/vehicules_characteristics/update/<?php echo $_smarty_tpl->tpl_vars['data']->value['vehicule_id'];?>
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