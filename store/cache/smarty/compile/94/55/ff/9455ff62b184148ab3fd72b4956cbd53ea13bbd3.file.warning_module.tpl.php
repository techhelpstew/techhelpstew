<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:09
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14198280256dca5992459a0-08796910%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9455ff62b184148ab3fd72b4956cbd53ea13bbd3' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1457300082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14198280256dca5992459a0-08796910',
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
  'unifunc' => 'content_56dca59924ce36_02200337',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59924ce36_02200337')) {function content_56dca59924ce36_02200337($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
