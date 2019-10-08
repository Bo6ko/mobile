<?php /* Smarty version Smarty-3.1.8, created on 2019-06-08 10:20:14
         compiled from "application/views\manager\equipements\create.htm" */ ?>
<?php /*%%SmartyHeaderCode:52235cfb6fbe85e0e4-80052237%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c81d97ca10d83ba3f654830a67545bcd45a0d417' => 
    array (
      0 => 'application/views\\manager\\equipements\\create.htm',
      1 => 1559981821,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52235cfb6fbe85e0e4-80052237',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'response' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cfb6fbe904fd9_81539623',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfb6fbe904fd9_81539623')) {function content_5cfb6fbe904fd9_81539623($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_equipements" class="btn">View all equipements</a>
    </div>
    <div class="clear"></div>

    <?php if (isset($_smarty_tpl->tpl_vars['response']->value)&&!empty($_smarty_tpl->tpl_vars['response']->value)){?>
    <div class="message <?php if (isset($_smarty_tpl->tpl_vars['response']->value['status'])){?>  <?php if (!$_smarty_tpl->tpl_vars['response']->value['status']){?>error<?php }else{ ?>success<?php }?> <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

    </div>
    <?php }?>

    <form method="post" action="">
        <fieldset>
            <legend>Create equipements</legend>
            <ul>
                <li>
                    <div class="d1"><label for="equipement_name">Name: </label></div>
                    <div class="d2"><input type="text" name="equipement_name" id="equipement_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['equipement_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['equipement_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <input class="btn" type="submit" value="Create">
                </li>
            </ul>
        </fieldset>
    </form>

</div><?php }} ?>