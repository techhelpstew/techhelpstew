<?php /*%%SmartyHeaderCode:1912419507568f0c837ef2a2-15883834%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd4250d1a174f1617727b140940f4d1cd5e408d1a' => 
    array (
      0 => '/var/www/techhelpstew.com/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1452127828,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912419507568f0c837ef2a2-15883834',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5691f4c05cebf0_57657728',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5691f4c05cebf0_57657728')) {function content_5691f4c05cebf0_57657728($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//techhelpstew.com/index.php?controller=search" >
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