{*template cart*}

<h1>Cart</h1>

{if ! $rsProducts}
		it's empty
		{else}
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
			{foreach $rsProducts as $item name=products}
				<tr>
					<td>
						{$smarty.foreach.products.iteration}
					</td>
					<td>
						<a href="/product/{$item['id']}/">{$item['name']}</a><br />
					</td>
					<td>
						<input type="text" name="itemCnt_{$item['id']}" id="itemCnt_{$item['id']}" value="1" onchange="conversionPrice({$item['id']});">
					</td>
					<td>
						<span id="itemPrice_{$item['id']}" value="{$item['price']}">{$item['price']}</span>
					</td>
					<td>
						<span id="itemRealPrice_{$item['id']}" >{$item['price']}</span>
					</td>
					<td>
						<a id="removeCart_{$item['id']}" href="#" onclick="removeFromCart({$item['id']}); return.false;" title="Remove from cart">Remove</a>
						<a id="addCart_{$item['id']}" style="display:none;" href="#" onclick="addToCart({$item['id']}); return.false;" title="Restore from cart">Restore</a>
					</td>
				</tr>
			{/foreach}
		</table>
{/if}
