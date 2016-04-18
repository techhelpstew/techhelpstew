<?php /* Smarty version Smarty-3.1.19, created on 2016-01-26 15:46:41
         compiled from "/var/www/techhelpstew.com/modules/paypalusa/views/templates/admin/admin-order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:88422480656a7db318f7344-69229797%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '985ab2896da71ae3b9bdb43d685c3dbeb000562d' => 
    array (
      0 => '/var/www/techhelpstew.com/modules/paypalusa/views/templates/admin/admin-order.tpl',
      1 => 1452297511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '88422480656a7db318f7344-69229797',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_dir' => 0,
    'paypal_usa_transaction_details' => 0,
    'paypal_usa_refund' => 0,
    'paypal_usa_refund_error' => 0,
    'paypal_usa_more60d' => 0,
    'paypal_usa_refund_details' => 0,
    'refund_transaction' => 0,
    'total_refund' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56a7db319e5889_69928529',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a7db319e5889_69928529')) {function content_56a7db319e5889_69928529($_smarty_tpl) {?>
<br />
<fieldset>
    <legend><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
logo.gif" alt="" /> <?php echo smartyTranslate(array('s'=>'PayPal transaction details','mod'=>'paypalusa'),$_smarty_tpl);?>
</legend>
	<table cellpadding="0" cellspacing="0" class="table">
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'Method','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['source'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
		</tr>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'Transaction ID','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['id_transaction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
		</tr>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'Amount charged','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['amount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['currency'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
		</tr>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'Mode','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php if ($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['mode']=='test') {?><span style="color: #CC0000;"><?php echo smartyTranslate(array('s'=>'Sandbox (Test)','mod'=>'paypalusa'),$_smarty_tpl);?>
</span><?php } else { ?><?php echo smartyTranslate(array('s'=>'Live','mod'=>'paypalusa'),$_smarty_tpl);?>
<?php }?></td>
		</tr>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'Date','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['date_add'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
		</tr>
		<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cc_type'])&&$_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cc_type']!='') {?>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'Credit card type','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cc_type'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
		</tr>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cc_exp'])&&$_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cc_exp']!='') {?>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'Credit expiration date','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cc_exp'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
		</tr>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cc_last_digits'])&&$_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cc_last_digits']!='') {?>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'Credit card last 4 digits','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cc_last_digits'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
		</tr>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cvc_check'])&&$_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cvc_check']!='') {?>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'CVC Check','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['cvc_check'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
		</tr>
		<?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['fee'])&&$_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['fee']!='0.00') {?>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'PayPal fees','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['fee'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['currency'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
</td>
		</tr>
		<?php }?>
	</table>
</fieldset>

<br />
<fieldset>
	<legend><img src="<?php echo $_smarty_tpl->tpl_vars['module_dir']->value;?>
logo.gif" alt="" /> <?php echo smartyTranslate(array('s'=>'Proceed to a full or partial refund via PayPal','mod'=>'paypalusa'),$_smarty_tpl);?>
</legend>
	<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_refund']->value)&&$_smarty_tpl->tpl_vars['paypal_usa_refund']->value) {?>
		<div class="conf"><?php echo smartyTranslate(array('s'=>'Refund successfully performed','mod'=>'paypalusa'),$_smarty_tpl);?>
</div><br />
	<?php } else { ?>
		<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_refund']->value)&&!$_smarty_tpl->tpl_vars['paypal_usa_refund']->value) {?>
		<div class="error"><?php echo smartyTranslate(array('s'=>'An error occured during this refund','mod'=>'paypalusa'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_refund_error']->value)&&$_smarty_tpl->tpl_vars['paypal_usa_refund_error']->value) {?> - <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_refund_error']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
<?php }?></div><br />
		<?php }?>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['paypal_usa_more60d']->value) {?>
		<div class="info"><?php echo smartyTranslate(array('s'=>'This order has been placed more than 60 days ago or no transaction details are available. Therefore, it cannot be refunded anymore.','mod'=>'paypalusa'),$_smarty_tpl);?>
</div>
	<?php }?>
	<table class="table" cellpadding="0" cellspacing="0">
		<tr>
			<th><?php echo smartyTranslate(array('s'=>'Date','mod'=>'paypalusa'),$_smarty_tpl);?>
</th>
			<th><?php echo smartyTranslate(array('s'=>'Amount refunded','mod'=>'paypalusa'),$_smarty_tpl);?>
</th>
		</tr>
		<?php $_smarty_tpl->tpl_vars['total_refund'] = new Smarty_variable(0, null, 0);?>
		<?php  $_smarty_tpl->tpl_vars['refund_transaction'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['refund_transaction']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['paypal_usa_refund_details']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['refund_transaction']->key => $_smarty_tpl->tpl_vars['refund_transaction']->value) {
$_smarty_tpl->tpl_vars['refund_transaction']->_loop = true;
?>
		<tr>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['refund_transaction']->value['date_add'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['refund_transaction']->value['amount'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['refund_transaction']->value['currency'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </td>
		</tr>
		<?php $_smarty_tpl->tpl_vars['total_refund'] = new Smarty_variable($_smarty_tpl->tpl_vars['total_refund']->value+$_smarty_tpl->tpl_vars['refund_transaction']->value['amount'], null, 0);?>
		<?php } ?>
		<tr>
			<td><?php echo smartyTranslate(array('s'=>'Total refunded:','mod'=>'paypalusa'),$_smarty_tpl);?>
</td>
			<td><?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['total_refund']->value, ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 <?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['refund_transaction']->value['currency'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
 </td>
		</tr>
	</table>
	<br />
	<?php if ($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['amount']==$_smarty_tpl->tpl_vars['total_refund']->value&&$_smarty_tpl->tpl_vars['total_refund']->value) {?>
		<?php echo smartyTranslate(array('s'=>'This order has been fully refunded.','mod'=>'paypalusa'),$_smarty_tpl);?>

	<?php } else { ?>
		<form method="post" action="" name="refund">
			<?php echo smartyTranslate(array('s'=>'Refund:','mod'=>'paypalusa'),$_smarty_tpl);?>
 <input type="text" name="refund_amount" value="<?php echo floatval(($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['amount']-$_smarty_tpl->tpl_vars['total_refund']->value));?>
" />
			<input type="hidden" name="id_transaction" value="<?php echo mb_convert_encoding(htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_transaction_details']->value['id_transaction'], ENT_QUOTES, 'UTF-8', true), "HTML-ENTITIES", 'UTF-8');?>
" />
			<input type="submit" name="process_refund" value ="<?php echo smartyTranslate(array('s'=>'Process Refund','mod'=>'paypalusa'),$_smarty_tpl);?>
" class="button" />
		</form>
	<?php }?>
</fieldset><?php }} ?>
