<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:12
         compiled from "/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:70255813756dca59c02d123-52842884%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26102c84af042c60ade71bb767aac5a6738e9787' => 
    array (
      0 => '/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/cheque/views/templates/hook/infos.tpl',
      1 => 1457300824,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '70255813756dca59c02d123-52842884',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca59c036d48_35317315',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59c036d48_35317315')) {function content_56dca59c036d48_35317315($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/cheque/cheque.jpg" style="float:left; margin-right:15px;" width="86" height="49">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept payments by check.",'mod'=>'cheque'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses this payment method, the order status will change to 'Waiting for payment.'",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"You will need to manually confirm the order as soon as you receive a check.",'mod'=>'cheque'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>
