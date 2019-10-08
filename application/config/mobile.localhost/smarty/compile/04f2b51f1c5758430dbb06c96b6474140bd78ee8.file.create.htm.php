<?php /* Smarty version Smarty-3.1.8, created on 2019-06-15 22:02:21
         compiled from "application/views\manager\vehicules\create.htm" */ ?>
<?php /*%%SmartyHeaderCode:190025cfcbf2055a6a5-73848504%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '04f2b51f1c5758430dbb06c96b6474140bd78ee8' => 
    array (
      0 => 'application/views\\manager\\vehicules\\create.htm',
      1 => 1560610507,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '190025cfcbf2055a6a5-73848504',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cfcbf206cb082_58695614',
  'variables' => 
  array (
    'response' => 0,
    'marques' => 0,
    'marque' => 0,
    'post' => 0,
    'modeles' => 0,
    'modele' => 0,
    'engines' => 0,
    'engine' => 0,
    'carrosseries' => 0,
    'carrosserie' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfcbf206cb082_58695614')) {function content_5cfcbf206cb082_58695614($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicules" class="btn">View all vehicules</a>
    </div>
    <div class="clear"></div>

    <?php if (isset($_smarty_tpl->tpl_vars['response']->value)&&!empty($_smarty_tpl->tpl_vars['response']->value)){?>
    <div class="message <?php if (isset($_smarty_tpl->tpl_vars['response']->value['status'])){?>  <?php if (!$_smarty_tpl->tpl_vars['response']->value['status']){?>error<?php }else{ ?>success<?php }?> <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

    </div>
    <?php }?>

    <form method="post" action="">
        <fieldset>
            <legend>Create vehicules</legend>
            <ul>
                <li>
                    <label for="marque_id">Marque: </label>
                    <select id="marque_id" class="form-control" name="marque_id">
                        <option value=""> - choose - </option>

                        <?php if (isset($_smarty_tpl->tpl_vars['marques']->value)&&is_array($_smarty_tpl->tpl_vars['marques']->value)&&count($_smarty_tpl->tpl_vars['marques']->value)>0){?>
                            <?php  $_smarty_tpl->tpl_vars['marque'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['marque']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['marques']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['marque']->key => $_smarty_tpl->tpl_vars['marque']->value){
$_smarty_tpl->tpl_vars['marque']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['marque_id'])&&$_smarty_tpl->tpl_vars['post']->value['marque_id']==$_smarty_tpl->tpl_vars['marque']->value['marque_id']){?>selected="selected"<?php }?>  ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['marque']->value['marque_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        <?php }?>
                    </select><br/>
                </li>

                <li>
                    <label for="modele_id">Modele: </label>
                    <select id="modele_id" class="form-control" name="modele_id">
                        <option value=""> - choose - </option>

                        <?php if (isset($_smarty_tpl->tpl_vars['modeles']->value)&&is_array($_smarty_tpl->tpl_vars['modeles']->value)&&count($_smarty_tpl->tpl_vars['modeles']->value)>0){?>
                            <?php  $_smarty_tpl->tpl_vars['modele'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['modele']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modeles']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['modele']->key => $_smarty_tpl->tpl_vars['modele']->value){
$_smarty_tpl->tpl_vars['modele']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['modele']->value['modele_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['modele_id'])&&$_smarty_tpl->tpl_vars['post']->value['modele_id']==$_smarty_tpl->tpl_vars['modele']->value['modele_id']){?>selected="selected"<?php }?>  ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['modele']->value['modele_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        <?php }?>

                    </select><br/>
                </li>

                <li>
                    <label for="engine_id">Engine: </label>
                    <select id="engine_id" class="form-control" name="engine_id">
                        <option value=""> - choose - </option>

                        <?php if (isset($_smarty_tpl->tpl_vars['engines']->value)&&is_array($_smarty_tpl->tpl_vars['engines']->value)&&count($_smarty_tpl->tpl_vars['engines']->value)>0){?>
                            <?php  $_smarty_tpl->tpl_vars['engine'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['engine']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['engines']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['engine']->key => $_smarty_tpl->tpl_vars['engine']->value){
$_smarty_tpl->tpl_vars['engine']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['engine']->value['engine_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['engine_id'])&&$_smarty_tpl->tpl_vars['post']->value['engine_id']==$_smarty_tpl->tpl_vars['engine']->value['engine_id']){?>selected="selected"<?php }?>  ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['engine']->value['engine_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        <?php }?>

                    </select><br/>
                </li>

                <li>
                    <label for="carrosserie_id">Carrosserie: </label>
                    <select id="carrosserie_id" class="form-control" name="carrosserie_id">
                        <option value=""> - choose - </option>

                        <?php if (isset($_smarty_tpl->tpl_vars['carrosseries']->value)&&is_array($_smarty_tpl->tpl_vars['carrosseries']->value)&&count($_smarty_tpl->tpl_vars['carrosseries']->value)>0){?>
                            <?php  $_smarty_tpl->tpl_vars['carrosserie'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['carrosserie']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carrosseries']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['carrosserie']->key => $_smarty_tpl->tpl_vars['carrosserie']->value){
$_smarty_tpl->tpl_vars['carrosserie']->_loop = true;
?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id'];?>
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value['carrosserie_id'])&&$_smarty_tpl->tpl_vars['post']->value['carrosserie_id']==$_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_id']){?>selected="selected"<?php }?>  ><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['carrosserie']->value['carrosserie_name'], ENT_QUOTES, 'UTF-8', true);?>
</option>
                            <?php } ?>
                        <?php }?>

                    </select><br/>
                </li>


                <li>
                    <input class="btn" type="submit" value="Create">
                </li>
            </ul>
        </fieldset>
    </form>

</div><?php }} ?>