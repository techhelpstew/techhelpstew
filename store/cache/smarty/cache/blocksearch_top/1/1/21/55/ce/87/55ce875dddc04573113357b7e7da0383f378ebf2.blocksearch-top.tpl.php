<?php /*%%SmartyHeaderCode:15849817856dca82ab34b72-71931804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55ce875dddc04573113357b7e7da0383f378ebf2' => 
    array (
      0 => '/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1457300768,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15849817856dca82ab34b72-71931804',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570b0e785d2c25_84093304',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570b0e785d2c25_84093304')) {function content_570b0e785d2c25_84093304($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//techhelpstew.com/store/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Search" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Search</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
