<?php /* Smarty version Smarty-3.1.19, created on 2016-03-06 13:48:12
         compiled from "/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/blockwishlist/my-account.tpl" */ ?>
<?php /*%%SmartyHeaderCode:207334419556dca59cb17680-82794553%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c545496e8530e3132350f5103f128aeff5265108' => 
    array (
      0 => '/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/blockwishlist/my-account.tpl',
      1 => 1457300767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207334419556dca59cb17680-82794553',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56dca59cb25cf4_99277681',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56dca59cb25cf4_99277681')) {function content_56dca59cb25cf4_99277681($_smarty_tpl) {?>

<!-- MODULE WishList -->
<li class="lnk_wishlist">
	<a 	href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getModuleLink('blockwishlist','mywishlist',array(),true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
">
		<i class="icon-heart"></i>
		<span><?php echo smartyTranslate(array('s'=>'My wishlists','mod'=>'blockwishlist'),$_smarty_tpl);?>
</span>
	</a>
</li>
<!-- END : MODULE WishList --><?php }} ?>
