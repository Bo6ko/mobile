<?php /* Smarty version Smarty-3.1.8, created on 2019-06-08 10:51:33
         compiled from "application/views\manager\caracteristics\create.htm" */ ?>
<?php /*%%SmartyHeaderCode:163005cfb7715db4197-46260650%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1ec9acfb0f70de166227e4c873de2a2203824eea' => 
    array (
      0 => 'application/views\\manager\\caracteristics\\create.htm',
      1 => 1559982459,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '163005cfb7715db4197-46260650',
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
  'unifunc' => 'content_5cfb7715e51e12_53183825',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfb7715e51e12_53183825')) {function content_5cfb7715e51e12_53183825($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_caracteristics" class="btn">View all caracteristics</a>
    </div>
    <div class="clear"></div>

    <?php if (isset($_smarty_tpl->tpl_vars['response']->value)&&!empty($_smarty_tpl->tpl_vars['response']->value)){?>
    <div class="message <?php if (isset($_smarty_tpl->tpl_vars['response']->value['status'])){?>  <?php if (!$_smarty_tpl->tpl_vars['response']->value['status']){?>error<?php }else{ ?>success<?php }?> <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

    </div>
    <?php }?>

    <form method="post" action="">
        <fieldset>
            <legend>Create caracteristics</legend>
            <ul>
                <li>
                    <div class="d1"><label for="caracteristic_name">Name: </label></div>
                    <div class="d2"><input type="text" name="caracteristic_name" id="caracteristic_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['caracteristic_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['caracteristic_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <input class="btn" type="submit" value="Create">
                </li>
            </ul>
        </fieldset>
    </form>

</div><?php }} ?>