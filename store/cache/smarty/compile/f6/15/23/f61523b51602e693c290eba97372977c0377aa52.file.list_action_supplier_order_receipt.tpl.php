<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:11
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88577491556dca59b18f9a1-15640130%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f61523b51602e693c290eba97372977c0377aa52' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/list/list_action_supplier_order_receipt.tpl',
      1 => 1457300110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88577491556dca59b18f9a1-15640130',
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
  'unifunc' => 'content_56dca59b19d350_53256052',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59b19d350_53256052')) {function content_56dca59b19d350_53256052($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
">
	<i class="icon-truck"></i> <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>

</a><?php }} ?>
