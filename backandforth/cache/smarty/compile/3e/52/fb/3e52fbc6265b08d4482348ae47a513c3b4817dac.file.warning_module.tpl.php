<?php /* Smarty version Smarty-3.1.19, created on 2016-01-07 21:37:37
         compiled from "/var/www/techhelpstew.com/sadmin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2070786740568f20f1715c25-39753794%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3e52fbc6265b08d4482348ae47a513c3b4817dac' => 
    array (
      0 => '/var/www/techhelpstew.com/sadmin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1452127828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2070786740568f20f1715c25-39753794',
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
  'unifunc' => 'content_568f20f171e314_96009721',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568f20f171e314_96009721')) {function content_568f20f171e314_96009721($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
