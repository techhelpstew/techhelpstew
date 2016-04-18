<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:12
         compiled from "/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:78132419956dca59c3f2b98-60763475%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7fc315a31ae6a7fdb62455a5ca0b0f830fc54ed5' => 
    array (
      0 => '/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/mailalerts/views/templates/hook/my-account.tpl',
      1 => 1457300828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78132419956dca59c3f2b98-60763475',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca59c400474_90741141',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59c400474_90741141')) {function content_56dca59c400474_90741141($_smarty_tpl) {?>

<li class="mailalerts">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('mailalerts','account',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
" rel="nofollow">
    	<i class="icon-envelope"></i>
		<span><?php echo smartyTranslate(array('s'=>'My alerts','mod'=>'mailalerts'),$_smarty_tpl);?>
</span>
	</a>
</li>
<?php }} ?>
