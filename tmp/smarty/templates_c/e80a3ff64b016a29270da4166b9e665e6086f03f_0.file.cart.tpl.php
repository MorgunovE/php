<?php
/* Smarty version 3.1.39, created on 2021-06-28 13:00:04
  from '/opt/lampp/htdocs/php/views/default/cart.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d9abb454a2d0_43110662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e80a3ff64b016a29270da4166b9e665e6086f03f' => 
    array (
      0 => '/opt/lampp/htdocs/php/views/default/cart.tpl',
      1 => 1624878001,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d9abb454a2d0_43110662 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h1>Cart</h1>

<?php if (!$_smarty_tpl->tpl_vars['rsProducts']->value) {?>
		it's empty
		<?php } else { ?>
		<h2>Goods for sale</h2>
		<table>
			<tr>
				<td>
					#
				</td>
				<td>
					Name
				</td>
				<td>
					Counts
				</td>
				<td>
					Price for 1
				</td>
				<td>
					Price
				</td>
				<td>
					Action
				</td>
			</tr>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
				<tr>
					<td>
						<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null);?>

					</td>
					<td>
						<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a><br />
					</td>
					<td>
						<input type="text" name="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" id="itemCnt_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="1" onchange="conversionPrice(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
);">
					</td>
					<td>
						<span id="itemPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" value="<?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span>
					</td>
					<td>
						<span id="itemRealPrice_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" ><?php echo $_smarty_tpl->tpl_vars['item']->value['price'];?>
</span>
					</td>
					<td>
						<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return.false;" title="Remove from cart">Remove</a>
						<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
" style="display:none;" href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
); return.false;" title="Restore from cart">Restore</a>
					</td>
				</tr>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</table>
<?php }
}
}
