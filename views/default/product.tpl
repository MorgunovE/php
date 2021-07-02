{*Page of product*}

<h3>{$rsProduct['name']}</h3>

<img width="575" src="/images/products/{$rsProduct['image']}" alt="">
Price: {$rsProduct['price']}
<a id="removeCart_{$rsProduct['id']}" {if ! $itemInCart}style="display:none;" {/if} href="#" onclick="removeFromCart({$rsProduct['id']}); return false;" alt="Remove from cart">Remove from cart</a>
<a id="addCart_{$rsProduct['id']}" {if $itemInCart}style="display:none;" {/if} href="#" onclick="addToCart({$rsProduct['id']}); return false;" alt="Add to cart">Add to cart</a>
<p>Description <br />{$rsProduct['description']}</p>