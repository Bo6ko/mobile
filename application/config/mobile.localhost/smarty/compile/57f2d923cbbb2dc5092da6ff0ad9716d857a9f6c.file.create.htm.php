<?php /* Smarty version Smarty-3.1.8, created on 2019-06-15 15:04:21
         compiled from "application/views\manager\marques\create.htm" */ ?>
<?php /*%%SmartyHeaderCode:63665cf248c4660110-69391702%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '57f2d923cbbb2dc5092da6ff0ad9716d857a9f6c' => 
    array (
      0 => 'application/views\\manager\\marques\\create.htm',
      1 => 1560197526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '63665cf248c4660110-69391702',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_5cf248c46a1db8_63915636',
  'variables' => 
  array (
    'response' => 0,
    'post' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5cf248c46a1db8_63915636')) {function content_5cf248c46a1db8_63915636($_smarty_tpl) {?><div class="section">

    <div class="create-btn">
        <a href="<?php echo @WEB_PATH;?>
manager/vehicule_marques" class="btn">View all marks</a>
    </div>
    <div class="clear"></div>

    <?php if (isset($_smarty_tpl->tpl_vars['response']->value)&&!empty($_smarty_tpl->tpl_vars['response']->value)){?>
    <div class="message <?php if (isset($_smarty_tpl->tpl_vars['response']->value['status'])){?>  <?php if (!$_smarty_tpl->tpl_vars['response']->value['status']){?>error<?php }else{ ?>success<?php }?> <?php }?>">
        <?php echo $_smarty_tpl->tpl_vars['response']->value['message'];?>

    </div>
    <?php }?>
    
    <form method="post" action="">
        <fieldset>
            <legend>Create mark</legend>
            <ul>
                <li>
                    <div class="d1"><label for="marque_name">Name: </label></div>
                    <div class="d2"><input type="text" name="marque_name" id="marque_name" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['marque_name'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['marque_name'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <div class="d1"><label for="marque_slogan">Slogan: </label></div>
                    <div class="d2"><input type="text" name="marque_slogan" id="marque_slogan" value="<?php if (isset($_smarty_tpl->tpl_vars['post']->value['marque_slogan'])){?><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['post']->value['marque_slogan'], ENT_QUOTES, 'UTF-8', true);?>
<?php }?>" /></div>
                </li>

                <li>
                    <input class="btn" type="submit" value="Create">
                </li>
            </ul>
        </fieldset>
    </form>

</div><?php }} ?>