<?php /* Smarty version Smarty-3.1.8, created on 2019-06-08 10:05:59
         compiled from "application/views\manager\engines\create.htm" */ ?>
<?php /*%%SmartyHeaderCode:202795cfb656eb4c569-15229865%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af5543a14febb00b23056fe6b5f1d58ad9e0de60' => 
    array (
      0 => 'application/views\\manager\\engines\\create.htm',
      1 => 1559981157,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '202795cfb656eb4c569-15229865',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cfb656ebff4d9_95444231',
  'variables' => 
  array (
    'response' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cfb656ebff4d9_95444231')) {function content_5cfb656ebff4d9_95444231($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_engines" class="btn">View all engines</a>
    </div>
    <div class="clear"></div>

    <?php if (isset($_smarty_tpl->tpl_vars['response']->value)&&!empty($_smarty_tpl->tpl_vars['response']->value)){?>
    <div class="message <?php if (isset($_smarty_tpl->tpl_vars['response']->value['status'])){?>  <?php if (!$_smarty_tpl->tpl_vars['response']->value['status']){?>error<?php }else{ ?>success<?php }?> <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

    </div>
    <?php }?>

    <form method="post" action="">
        <fieldset>
            <legend>Create engines</legend>
            <ul>
                <li>
                    <div class="d1"><label for="engine_name">Name: </label></div>
                    <div class="d2"><input type="text" name="engine_name" id="engine_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['engine_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['engine_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <input class="btn" type="submit" value="Create">
                </li>
            </ul>
        </fieldset>
    </form>

</div><?php }} ?>