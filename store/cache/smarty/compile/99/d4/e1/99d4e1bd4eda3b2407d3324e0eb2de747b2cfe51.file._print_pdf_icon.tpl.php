<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:09
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:106675355356dca59914c914-13480550%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '99d4e1bd4eda3b2407d3324e0eb2de747b2cfe51' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/slip/_print_pdf_icon.tpl',
      1 => 1457300092,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '106675355356dca59914c914-13480550',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'order_slip' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca599159437_16983124',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca599159437_16983124')) {function content_56dca599159437_16983124($_smarty_tpl) {?>



<a class="btn btn-default _blank" href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateOrderSlipPDF&amp;id_order_slip=<?php echo intval($_smarty_tpl->tpl_vars['order_slip']->value->id);?>
">
	<i class="icon-file-text"></i>
	<?php echo smartyTranslate(array('s'=>'Download credit slip'),$_smarty_tpl);?>

</a>

<?php }} ?>
