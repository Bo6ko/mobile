<?php /* Smarty version Smarty-3.1.8, created on 2019-06-15 15:15:49
         compiled from "application/views\manager\marques\update.htm" */ ?>
<?php /*%%SmartyHeaderCode:291075cf2a13a199485-73377123%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '264ade8a68e5ab3dcbebf4302ef508eeeab98234' => 
    array (
      0 => 'application/views\\manager\\marques\\update.htm',
      1 => 1559977736,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291075cf2a13a199485-73377123',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cf2a13a1d9904_87019673',
  'variables' => 
  array (
    'response' => 0,
    'post' => 0,
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf2a13a1d9904_87019673')) {function content_5cf2a13a1d9904_87019673($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_marques" class="btn" role="button"><span>View all marques</span></a>
    </div>
    <div class="clear"></div>

    <?php if (isset($_smarty_tpl->tpl_vars['response']->value)&&!empty($_smarty_tpl->tpl_vars['response']->value)){?>
    <div class="message <?php if (isset($_smarty_tpl->tpl_vars['response']->value['status'])){?>  <?php if (!$_smarty_tpl->tpl_vars['response']->value['status']){?>error<?php }else{ ?>success<?php }?> <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

    </div>
    <?php }?>

    <form method="post" action="">
        <fieldset>
            <legend>Update marque</legend>
            <ul>
                <li>
                    <div class="d1"><label for="marque_name">Name: </label></div>
                    <div class="d2"><input type="text" name="marque_name" id="marque_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['marque_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['marque_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }else{ ?><?php if (isset($_smarty_tpl->tpl_vars['data']->value['marque_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['marque_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?><?php }?>" /></div>
                </li>


                <li>
                    <div class="d1"><label for="marque_slogan">Slogan: </label></div>
                    <div class="d2"><input type="text" name="marque_slogan" id="marque_slogan" value="<?php if (isset($_smarty_tpl->tpl_vars['data']->value['marque_slogan'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['data']->value['marque_slogan'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <input class="btn" type="submit" value="Update">
                </li>
            </ul>
        </fieldset>
    </form>

    <div id="marque_update" class="create-btn">
        <!--<a href="<?php echo @WEB_PATH;?>
manager/vehicule_marques/ajax" class="btn" role="button">--><span>Ajax post</span>
    </div>
    <div class="clear"></div>


</div><?php }} ?>