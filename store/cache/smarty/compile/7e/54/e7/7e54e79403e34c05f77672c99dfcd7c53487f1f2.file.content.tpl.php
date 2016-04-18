<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:57:28
         compiled from "/var/www/techhelpstew.com/store/admin885ryw60f/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:199190403956dca7c899acf9-51066696%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e54e79403e34c05f77672c99dfcd7c53487f1f2' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin885ryw60f/themes/default/template/content.tpl',
      1 => 1457300028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199190403956dca7c899acf9-51066696',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca7c89a4a72_05825743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca7c89a4a72_05825743')) {function content_56dca7c89a4a72_05825743($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
