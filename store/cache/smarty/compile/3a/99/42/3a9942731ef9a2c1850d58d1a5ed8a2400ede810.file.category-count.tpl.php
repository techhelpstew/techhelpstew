<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:05
         compiled from "/var/www/techhelpstew.com/store/themes/default-bootstrap/category-count.tpl" */ ?>
<?php /*%%SmartyHeaderCode:57466552056dca59535bac3-50947649%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a9942731ef9a2c1850d58d1a5ed8a2400ede810' => 
    array (
      0 => '/var/www/techhelpstew.com/store/themes/default-bootstrap/category-count.tpl',
      1 => 1457300744,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '57466552056dca59535bac3-50947649',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'nb_products' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca5953a6586_27773255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca5953a6586_27773255')) {function content_56dca5953a6586_27773255($_smarty_tpl) {?>
<span class="heading-counter"><?php if ((isset($_smarty_tpl->tpl_vars['category']->value)&&$_smarty_tpl->tpl_vars['category']->value->id==1)||(isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==0)) {?><?php echo smartyTranslate(array('s'=>'There are no products in this category.'),$_smarty_tpl);?>
<?php } else { ?><?php if (isset($_smarty_tpl->tpl_vars['nb_products']->value)&&$_smarty_tpl->tpl_vars['nb_products']->value==1) {?><?php echo smartyTranslate(array('s'=>'There is 1 product.'),$_smarty_tpl);?>
<?php } elseif (isset($_smarty_tpl->tpl_vars['nb_products']->value)) {?><?php echo smartyTranslate(array('s'=>'There are %d products.','sprintf'=>$_smarty_tpl->tpl_vars['nb_products']->value),$_smarty_tpl);?>
<?php }?><?php }?></span>
<?php }} ?>
