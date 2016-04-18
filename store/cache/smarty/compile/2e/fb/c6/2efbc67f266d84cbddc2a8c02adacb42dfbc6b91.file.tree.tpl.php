<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:10
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/tree/tree.tpl" */ ?>
<?php /*%%SmartyHeaderCode:114213761456dca59a7a9c22-27250007%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2efbc67f266d84cbddc2a8c02adacb42dfbc6b91' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/tree/tree.tpl',
      1 => 1457300107,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '114213761456dca59a7a9c22-27250007',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'header' => 0,
    'nodes' => 0,
    'id' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca59a7bb446_77980344',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59a7bb446_77980344')) {function content_56dca59a7bb446_77980344($_smarty_tpl) {?>
<div class="panel">
	<?php if (isset($_smarty_tpl->tpl_vars['header']->value)) {?><?php echo $_smarty_tpl->tpl_vars['header']->value;?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['nodes']->value)) {?>
	<ul id="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['id']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="tree">
		<?php echo $_smarty_tpl->tpl_vars['nodes']->value;?>

	</ul>
	<?php }?>
</div><?php }} ?>
