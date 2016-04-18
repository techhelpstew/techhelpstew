<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:08
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:179601680756dca598593020-03142501%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b21caf6f230e5266a269206dd0800e4e8d0f49d9' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/shop/helpers/tree/shop_tree_header.tpl',
      1 => 1457300149,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '179601680756dca598593020-03142501',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca5985a11d0_96640552',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca5985a11d0_96640552')) {function content_56dca5985a11d0_96640552($_smarty_tpl) {?>
<div class="panel-heading">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-sitemap"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<div class="pull-right">
		<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
	</div>
</div><?php }} ?>
