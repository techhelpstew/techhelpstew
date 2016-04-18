<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:09
         compiled from "/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl" */ ?>
<?php /*%%SmartyHeaderCode:37799428656dca5998a95f1-27399340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c31778357f92372367e9182509bb40bc2a203050' => 
    array (
      0 => '/var/www/techhelpstew.com/store/admin/themes/default/template/controllers/outstanding/_print_pdf_icon.tpl',
      1 => 1457300085,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '37799428656dca5998a95f1-27399340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'id_invoice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca5998b66d8_44655321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca5998b66d8_44655321')) {function content_56dca5998b66d8_44655321($_smarty_tpl) {?>


<?php if (Configuration::get('PS_INVOICE')) {?>
	<span style="width:20px; margin-right:5px;">
		<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getAdminLink('AdminPdf'), ENT_QUOTES, 'UTF-8', true);?>
&amp;submitAction=generateInvoicePDF&amp;id_order_invoice=<?php echo $_smarty_tpl->tpl_vars['id_invoice']->value;?>
"><img src="../img/admin/tab-invoice.gif" alt="invoice" /></a>
	</span>
<?php }?><?php }} ?>
