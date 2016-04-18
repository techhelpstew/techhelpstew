<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:12
         compiled from "/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:204196898856dca59c23edf5-29345593%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '98da03755aade07a1a7a16a21a7d63a2ff4b4615' => 
    array (
      0 => '/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/loyalty/views/templates/hook/my-account.tpl',
      1 => 1457300825,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '204196898856dca59c23edf5-29345593',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca59c24d9e4_68800876',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59c24d9e4_68800876')) {function content_56dca59c24d9e4_68800876($_smarty_tpl) {?>

<!-- MODULE Loyalty -->
<li class="loyalty">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('loyalty','default',array('process'=>'summary'),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
" rel="nofollow"><i class="icon-flag"></i><span><?php echo smartyTranslate(array('s'=>'My loyalty points','mod'=>'loyalty'),$_smarty_tpl);?>
</span></a>
</li>
<!-- END : MODULE Loyalty --><?php }} ?>
