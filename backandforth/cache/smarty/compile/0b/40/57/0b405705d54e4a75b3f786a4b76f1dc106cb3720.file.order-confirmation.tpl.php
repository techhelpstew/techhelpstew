<?php /* Smarty version Smarty-3.1.19, created on 2016-01-26 15:43:47
         compiled from "/var/www/techhelpstew.com/modules/paypalusa/views/templates/hook/order-confirmation.tpl" */ ?>
<?php /*%%SmartyHeaderCode:48067673156a7da83ab4950-37721163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0b405705d54e4a75b3f786a4b76f1dc106cb3720' => 
    array (
      0 => '/var/www/techhelpstew.com/modules/paypalusa/views/templates/hook/order-confirmation.tpl',
      1 => 1452297511,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '48067673156a7da83ab4950-37721163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'paypal_usa_order' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56a7da83b2afc0_45381743',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56a7da83b2afc0_45381743')) {function content_56a7da83b2afc0_45381743($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['paypal_usa_order']->value['valid']==1) {?>
<div class="conf confirmation">
	<?php echo smartyTranslate(array('s'=>'Congratulations! Your payment is pending verification, and your order has been saved under','mod'=>'paypalusa'),$_smarty_tpl);?>
<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_order']->value['reference'])) {?> <?php echo smartyTranslate(array('s'=>'the reference','mod'=>'paypalusa'),$_smarty_tpl);?>
 <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_order']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>
</b><?php } else { ?> <?php echo smartyTranslate(array('s'=>'the ID','mod'=>'paypalusa'),$_smarty_tpl);?>
 <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_order']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</b><?php }?>.
</div>
<?php } else { ?>
<div class="error">
	<?php echo smartyTranslate(array('s'=>'Unfortunately, an error occurred during the transaction.','mod'=>'paypalusa'),$_smarty_tpl);?>
<br /><br />
	<?php echo smartyTranslate(array('s'=>'Please double-check your credit card details and try again. If you need further assistance, feel free to contact us anytime.','mod'=>'paypalusa'),$_smarty_tpl);?>
<br /><br />
<?php if (isset($_smarty_tpl->tpl_vars['paypal_usa_order']->value['reference'])) {?>
	(<?php echo smartyTranslate(array('s'=>'Your Order\'s Reference:','mod'=>'paypalusa'),$_smarty_tpl);?>
 <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_order']->value['reference'], ENT_QUOTES, 'UTF-8', true);?>
</b>)
<?php } else { ?>
	(<?php echo smartyTranslate(array('s'=>'Your Order\'s ID:','mod'=>'paypalusa'),$_smarty_tpl);?>
 <b><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['paypal_usa_order']->value['id'], ENT_QUOTES, 'UTF-8', true);?>
</b>)
<?php }?>
</div>
<?php }?><?php }} ?>
