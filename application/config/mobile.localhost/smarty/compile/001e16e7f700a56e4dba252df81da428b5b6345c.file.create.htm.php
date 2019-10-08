<?php /* Smarty version Smarty-3.1.8, created on 2019-06-15 21:51:12
         compiled from "application/views\manager\characteristics\create.htm" */ ?>
<?php /*%%SmartyHeaderCode:131065d054c303bbf15-73514309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '001e16e7f700a56e4dba252df81da428b5b6345c' => 
    array (
      0 => 'application/views\\manager\\characteristics\\create.htm',
      1 => 1560601032,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '131065d054c303bbf15-73514309',
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
  'unifunc' => 'content_5d054c30419085_44388388',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5d054c30419085_44388388')) {function content_5d054c30419085_44388388($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_characteristics" class="btn">View all characteristics</a>
    </div>
    <div class="clear"></div>

    <?php if (isset($_smarty_tpl->tpl_vars['response']->value)&&!empty($_smarty_tpl->tpl_vars['response']->value)){?>
    <div class="message <?php if (isset($_smarty_tpl->tpl_vars['response']->value['status'])){?>  <?php if (!$_smarty_tpl->tpl_vars['response']->value['status']){?>error<?php }else{ ?>success<?php }?> <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

    </div>
    <?php }?>

    <form method="post" action="">
        <fieldset>
            <legend>Create characteristics</legend>
            <ul>
                <li>
                    <div class="d1"><label for="characteristic_name">Name: </label></div>
                    <div class="d2"><input type="text" name="characteristic_name" id="characteristic_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['characteristic_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['characteristic_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <input class="btn" type="submit" value="Create">
                </li>
            </ul>
        </fieldset>
    </form>

</div><?php }} ?>