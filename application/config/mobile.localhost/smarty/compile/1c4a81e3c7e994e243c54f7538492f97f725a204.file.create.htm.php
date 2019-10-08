<?php /* Smarty version Smarty-3.1.8, created on 2019-06-08 10:05:18
         compiled from "application/views\manager\carrosseries\create.htm" */ ?>
<?php /*%%SmartyHeaderCode:238575cfb6b48727ee4-64945497%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1c4a81e3c7e994e243c54f7538492f97f725a204' => 
    array (
      0 => 'application/views\\manager\\carrosseries\\create.htm',
      1 => 1559981116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '238575cfb6b48727ee4-64945497',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cfb6b487b8aa9_36230980',
  'variables' => 
  array (
    'response' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfb6b487b8aa9_36230980')) {function content_5cfb6b487b8aa9_36230980($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_carrosseries" class="btn">View all carrosserie</a>
    </div>
    <div class="clear"></div>

    <?php if (isset($_smarty_tpl->tpl_vars['response']->value)&&!empty($_smarty_tpl->tpl_vars['response']->value)){?>
    <div class="message <?php if (isset($_smarty_tpl->tpl_vars['response']->value['status'])){?>  <?php if (!$_smarty_tpl->tpl_vars['response']->value['status']){?>error<?php }else{ ?>success<?php }?> <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

    </div>
    <?php }?>

    <form method="post" action="">
        <fieldset>
            <legend>Create carrosserie</legend>
            <ul>
                <li>
                    <div class="d1"><label for="carrosserie_name">Name: </label></div>
                    <div class="d2"><input type="text" name="carrosserie_name" id="carrosserie_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['carrosserie_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['carrosserie_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <input class="btn" type="submit" value="Create">
                </li>
            </ul>
        </fieldset>
    </form>

</div><?php }} ?>