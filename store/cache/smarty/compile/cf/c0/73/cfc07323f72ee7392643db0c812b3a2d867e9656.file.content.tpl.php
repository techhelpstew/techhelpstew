<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:08
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/shop/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30388663956dca59858b5a6-43458382%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cfc07323f72ee7392643db0c812b3a2d867e9656' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/shop/content.tpl',
      1 => 1457300086,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30388663956dca59858b5a6-43458382',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca598590a90_28370092',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca598590a90_28370092')) {function content_56dca598590a90_28370092($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
