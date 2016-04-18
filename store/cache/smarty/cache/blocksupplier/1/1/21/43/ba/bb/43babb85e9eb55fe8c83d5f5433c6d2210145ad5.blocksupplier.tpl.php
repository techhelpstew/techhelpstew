<?php /*%%SmartyHeaderCode:18763569956dfa5ab311371-69889596%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '43babb85e9eb55fe8c83d5f5433c6d2210145ad5' => 
    array (
      0 => '/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/blocksupplier/blocksupplier.tpl',
      1 => 1457301983,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18763569956dfa5ab311371-69889596',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570b0e807d04c0_89227851',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570b0e807d04c0_89227851')) {function content_570b0e807d04c0_89227851($_smarty_tpl) {?>
<!-- Block suppliers module -->
<div id="suppliers_block_left" class="block blocksupplier">
	<p class="title_block">
					<a href="http://techhelpstew.com/store/index.php?controller=supplier" title="Suppliers">
					Suppliers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
											<li class="last_item">
                					<a 
					href="http://techhelpstew.com/store/index.php?id_supplier=1&amp;controller=supplier" 
					title="More about Fashion Supplier">
				                Fashion Supplier
                					</a>
                				</li>
										</ul>
										<form action="/store/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="supplier_list">
							<option value="0">All suppliers</option>
													<option value="http://techhelpstew.com/store/index.php?id_supplier=1&amp;controller=supplier">Fashion Supplier</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block suppliers module -->
<?php }} ?>
