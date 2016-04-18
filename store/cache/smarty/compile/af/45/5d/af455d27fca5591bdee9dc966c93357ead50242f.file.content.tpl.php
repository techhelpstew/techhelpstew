<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:59:08
         compiled from "/var/www/techhelpstew.com/store/sadmin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:116579531556dca82c1f16f4-57370386%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af455d27fca5591bdee9dc966c93357ead50242f' => 
    array (
      0 => '/var/www/techhelpstew.com/store/sadmin/themes/default/template/content.tpl',
      1 => 1457300028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '116579531556dca82c1f16f4-57370386',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca82c1fb1e2_97700660',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca82c1fb1e2_97700660')) {function content_56dca82c1fb1e2_97700660($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
