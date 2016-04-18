<?php /* Smarty version Smarty-3.1.19, created on 2016-01-07 21:36:07
         compiled from "/var/www/techhelpstew.com/sadmin/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2033059347568f2097125d18-70880677%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73cadc9de97acaf1b25bf33fb0bd60f4385e640b' => 
    array (
      0 => '/var/www/techhelpstew.com/sadmin/themes/default/template/content.tpl',
      1 => 1452127828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2033059347568f2097125d18-70880677',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_568f2097132304_02808143',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_568f2097132304_02808143')) {function content_568f2097132304_02808143($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
