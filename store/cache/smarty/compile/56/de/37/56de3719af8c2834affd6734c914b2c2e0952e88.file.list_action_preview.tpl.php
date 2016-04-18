<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:10
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/list/list_action_preview.tpl" */ ?>
<?php /*%%SmartyHeaderCode:97578136956dca59a947c96-35642693%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '56de3719af8c2834affd6734c914b2c2e0952e88' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/list/list_action_preview.tpl',
      1 => 1457300110,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '97578136956dca59a947c96-35642693',
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
  'unifunc' => 'content_56dca59a951195_76122406',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59a951195_76122406')) {function content_56dca59a951195_76122406($_smarty_tpl) {?>
<a href="<?php echo $_smarty_tpl->tpl_vars['href']->value;?>
" title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['action']->value, ENT_QUOTES, 'UTF-8', true);?>
" target="_blank">
	<i class="icon-eye"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a>
<?php }} ?>
