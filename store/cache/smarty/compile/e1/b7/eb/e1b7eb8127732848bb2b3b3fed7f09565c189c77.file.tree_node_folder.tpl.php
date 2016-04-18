<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:10
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/tree/tree_node_folder.tpl" */ ?>
<?php /*%%SmartyHeaderCode:135879780756dca59a6f3899-50843072%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e1b7eb8127732848bb2b3b3fed7f09565c189c77' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/helpers/tree/tree_node_folder.tpl',
      1 => 1457300106,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '135879780756dca59a6f3899-50843072',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'node' => 0,
    'children' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca59a6fd2f5_87446263',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59a6fd2f5_87446263')) {function content_56dca59a6fd2f5_87446263($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_escape')) include '/var/www/techhelpstew.com/store/tools/smarty/plugins/modifier.escape.php';
?>
<li class="tree-folder">
	<span class="tree-folder-name">
		<i class="icon-folder-close"></i>
		<label class="tree-toggler"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['node']->value['name'], ENT_QUOTES, 'UTF-8', true);?>
</label>
	</span>
	<ul class="tree">
		<?php echo smarty_modifier_escape($_smarty_tpl->tpl_vars['children']->value, 'UTF-8');?>

	</ul>
</li><?php }} ?>
