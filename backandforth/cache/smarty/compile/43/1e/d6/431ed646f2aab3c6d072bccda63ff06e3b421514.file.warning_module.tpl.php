<?php /* Smarty version Smarty-3.1.19, created on 2016-01-07 16:44:19
         compiled from "/var/www/techhelpstew.com/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:769051350568f0663b40216-73980283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '431ed646f2aab3c6d072bccda63ff06e3b421514' => 
    array (
      0 => '/var/www/techhelpstew.com/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1452127828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '769051350568f0663b40216-73980283',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568f0663b476b7_40791788',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568f0663b476b7_40791788')) {function content_568f0663b476b7_40791788($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
