<?php /* Smarty version Smarty-3.1.19, created on 2016-01-07 16:44:20
         compiled from "/var/www/techhelpstew.com/admin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:610876066568f066456c382-24716801%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '67dfd88df8206b5311ab0fe88cb3c2903f6130e3' => 
    array (
      0 => '/var/www/techhelpstew.com/admin/themes/default/template/content.tpl',
      1 => 1452127828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '610876066568f066456c382-24716801',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568f0664574891_28641918',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568f0664574891_28641918')) {function content_568f0664574891_28641918($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
