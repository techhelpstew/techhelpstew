<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:58:36
         compiled from "/var/www/techhelpstew.com/store/sadmin/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:68113223656dca80c63caa7-98681595%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f8ac638f77ab750c3447a6e68aa3f3be0ab6589' => 
    array (
      0 => '/var/www/techhelpstew.com/store/sadmin/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1457300109,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '68113223656dca80c63caa7-98681595',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca80c63fa52_44608638',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca80c63fa52_44608638')) {function content_56dca80c63fa52_44608638($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<?php }} ?>
