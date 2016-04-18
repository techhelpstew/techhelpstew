<?php /* Smarty version Smarty-3.1.19, created on 2016-03-08 20:55:27
         compiled from "/var/www/techhelpstew.com/store/sadmin/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl" */ ?>
<?php /*%%SmartyHeaderCode:50401098756dfacbfd43057-13984412%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcacbbad28dd52f4706e13fb6c2623fb6f368eb1' => 
    array (
      0 => '/var/www/techhelpstew.com/store/sadmin/themes/default/template/controllers/products/helpers/tree/tree_toolbar.tpl',
      1 => 1457300140,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '50401098756dfacbfd43057-13984412',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'actions' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dfacbfd79f95_94199531',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dfacbfd79f95_94199531')) {function content_56dfacbfd79f95_94199531($_smarty_tpl) {?>
<div class="tree-actions pull-right">
	<?php if (isset($_smarty_tpl->tpl_vars['actions']->value)) {?>
	<?php  $_smarty_tpl->tpl_vars['action'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['action']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['actions']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['action']->key => $_smarty_tpl->tpl_vars['action']->value) {
$_smarty_tpl->tpl_vars['action']->_loop = true;
?>
		<?php echo $_smarty_tpl->tpl_vars['action']->value->render();?>

	<?php } ?>
	<?php }?>
</div><?php }} ?>
