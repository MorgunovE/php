<div id="LeftColumn">
	<div id="LeftMenu">
		<div class="menuCaption">Menu:</div>
      {foreach $rsCategories as $item}
				<a href="/?controller=category&id={$item['id']}">{$item['name']}</a>
				<br/>
          {if isset($item['children'])}
              {foreach $item['children'] as $itemChild}
								--
								<a href="/?controller=category&id={$itemChild['id']}">{$itemChild['name']}</a>
								<br/>
              {/foreach}
          {/if}
      {/foreach}
	</div>
	<div id="registerBox">
		<div class="menuCaption showHidden" onclick="showRegisterBox();">Registration</div>
		<div class="registerBoxHidden">
			email:<br />
			<input type="text" id="email" name="email" value=""><br />
			password:<br />
			<input type="password" id="pwd1" name="pwd1" value=""><br />
			repeat password:<br />
			<input type="password" id="pwd2" name="pwd2" value=""><br />
			<input type="button" onclick="registerNewUser();" value="Register">
		</div>
	</div>
	<div class="menuCaption">Cart</div>
	<a href="/cart/" title="Go to Cart">Into cart</a>
	<span id="cartCntItems">
      {if $cartCntItems > 0 }{$cartCntItems}{else}empty{/if}
    </span>
</div>