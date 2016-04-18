<?php /* Smarty version Smarty-3.1.19, created on 2016-03-09 09:27:32
         compiled from "/var/www/techhelpstew.com/store/sadmin/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68916067556e05d04cff5c9-02845733%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f87a42ca7dda6b21b815f9807552ab8de0d4e84f' => 
    array (
      0 => '/var/www/techhelpstew.com/store/sadmin/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1457300082,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68916067556e05d04cff5c9-02845733',
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
  'unifunc' => 'content_56e05d04d34301_89128423',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56e05d04d34301_89128423')) {function content_56e05d04d34301_89128423($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
