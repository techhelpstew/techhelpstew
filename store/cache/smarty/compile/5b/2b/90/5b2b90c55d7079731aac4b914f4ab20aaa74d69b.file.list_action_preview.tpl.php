<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 20:55:28
         compiled from "/var/www/techhelpstew.com/store/sadmin/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11248612156dfacc03da359-15630879%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b2b90c55d7079731aac4b914f4ab20aaa74d69b' => 
    array (
      0 => '/var/www/techhelpstew.com/store/sadmin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1457300110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11248612156dfacc03da359-15630879',
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
  'unifunc' => 'content_56dfacc03e4091_65444118',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dfacc03e4091_65444118')) {function content_56dfacc03e4091_65444118($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
