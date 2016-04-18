<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:09
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:40072185356dca599c08579-22570969%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bf71608755f32b052ace70ab9360ec2f617e5255' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/content.tpl',
      1 => 1457300028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '40072185356dca599c08579-22570969',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca599c107e2_48182179',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca599c107e2_48182179')) {function content_56dca599c107e2_48182179($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
