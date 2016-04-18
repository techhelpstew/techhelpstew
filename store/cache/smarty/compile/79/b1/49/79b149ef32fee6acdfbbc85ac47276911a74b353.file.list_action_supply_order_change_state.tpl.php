<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:11
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl" */ ?>
<?php /*%%SmartyHeaderCode:164913599456dca59b0457c3-32555008%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '79b149ef32fee6acdfbbc85ac47276911a74b353' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/list/list_action_supply_order_change_state.tpl',
      1 => 1457300110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '164913599456dca59b0457c3-32555008',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca59b053018_60302631',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59b053018_60302631')) {function content_56dca59b053018_60302631($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-time"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
