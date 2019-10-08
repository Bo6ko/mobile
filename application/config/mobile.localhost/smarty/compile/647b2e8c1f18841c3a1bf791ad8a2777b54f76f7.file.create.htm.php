<?php /* Smarty version Smarty-3.1.8, created on 2019-06-15 19:25:28
         compiled from "application/views\manager\modeles\create.htm" */ ?>
<?php /*%%SmartyHeaderCode:284235cf6d9785c3860-75380068%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '647b2e8c1f18841c3a1bf791ad8a2777b54f76f7' => 
    array (
      0 => 'application/views\\manager\\modeles\\create.htm',
      1 => 1560619516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '284235cf6d9785c3860-75380068',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cf6d97865f7d1_88792701',
  'variables' => 
  array (
    'response' => 0,
    'marques' => 0,
    'marque' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf6d97865f7d1_88792701')) {function content_5cf6d97865f7d1_88792701($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_modeles" class="btn">View all modeles</a>
    </div>
    <div class="clear"></div>

    <?php if (isset($_smarty_tpl->tpl_vars['response']->value)&&!empty($_smarty_tpl->tpl_vars['response']->value)){?>
    <div class="message <?php if (isset($_smarty_tpl->tpl_vars['response']->value['status'])){?>  <?php if (!$_smarty_tpl->tpl_vars['response']->value['status']){?>error<?php }else{ ?>success<?php }?> <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

    </div>
    <?php }?>

    <form method="post" action="">
        <fieldset>
            <legend>Create modeles</legend>
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
" <?php if (isset($_smarty_tpl->tpl_vars['post']->value)&&$_smarty_tpl->tpl_vars['post']->value['marque_id']==$_smarty_tpl->tpl_vars['marque']->value['marque_id']){?>selected="selected"<?php }?> ><?php echo $_smarty_tpl->tpl_vars['marque']->value['marque_name'];?>
</option>
                                <?php } ?>
                            <?php }?>
                        </select>
                    </div>
                </li>

                <li>
                    <div class="d1"><label for="modele_name">Name: </label></div>
                    <div class="d2"><input type="text" name="modele_name" id="modele_name" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['modele_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['modele_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <div class="d1"><label for="modele_slogan">Slogan: </label></div>
                    <div class="d2"><input type="text" name="modele_slogan" class="form-control" id="modele_slogan" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['modele_slogan'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['modele_slogan'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <input class="btn" type="submit" value="Create">
                </li>
            </ul>
        </fieldset>
    </form>

</div><?php }} ?>