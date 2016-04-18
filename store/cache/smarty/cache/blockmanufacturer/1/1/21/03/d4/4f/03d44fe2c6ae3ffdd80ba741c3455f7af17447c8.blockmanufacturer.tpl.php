<?php /*%%SmartyHeaderCode:175936407956dfa5aaf10180-72659174%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03d44fe2c6ae3ffdd80ba741c3455f7af17447c8' => 
    array (
      0 => '/var/www/techhelpstew.com/store/themes/default-bootstrap/modules/blockmanufacturer/blockmanufacturer.tpl',
      1 => 1457301976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175936407956dfa5aaf10180-72659174',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_570b0e806bb714_45702894',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_570b0e806bb714_45702894')) {function content_570b0e806bb714_45702894($_smarty_tpl) {?>
<!-- Block manufacturers module -->
<div id="manufacturers_block_left" class="block blockmanufacturer">
	<p class="title_block">
					<a href="http://techhelpstew.com/store/index.php?controller=manufacturer" title="Manufacturers">
						Manufacturers
					</a>
			</p>
	<div class="block_content list-block">
								<ul>
														<li class="last_item">
						<a 
						href="http://techhelpstew.com/store/index.php?id_manufacturer=1&amp;controller=manufacturer" title="More about Fashion Manufacturer">
							Fashion Manufacturer
						</a>
					</li>
												</ul>
										<form action="/store/index.php" method="get">
					<div class="form-group selector1">
						<select class="form-control" name="manufacturer_list">
							<option value="0">All manufacturers</option>
													<option value="http://techhelpstew.com/store/index.php?id_manufacturer=1&amp;controller=manufacturer">Fashion Manufacturer</option>
												</select>
					</div>
				</form>
						</div>
</div>
<!-- /Block manufacturers module -->
<?php }} ?>
