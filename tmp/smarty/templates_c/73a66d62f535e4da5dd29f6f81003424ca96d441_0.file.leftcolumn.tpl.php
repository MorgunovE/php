<?php
/* Smarty version 3.1.39, created on 2021-06-29 08:47:51
  from '/opt/lampp/htdocs/php/views/default/leftcolumn.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60dac21767e355_45728712',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '73a66d62f535e4da5dd29f6f81003424ca96d441' => 
    array (
      0 => '/opt/lampp/htdocs/php/views/default/leftcolumn.tpl',
      1 => 1624944104,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60dac21767e355_45728712 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="LeftColumn">
	<div id="LeftMenu">
		<div class="menuCaption">Menu:</div>
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
				<a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
				<br/>
          <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
              <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'itemChild');
$_smarty_tpl->tpl_vars['itemChild']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['itemChild']->value) {
$_smarty_tpl->tpl_vars['itemChild']->do_else = false;
?>
								--
								<a href="/?controller=category&id=<?php echo $_smarty_tpl->tpl_vars['itemChild']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['itemChild']->value['name'];?>
</a>
								<br/>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          <?php }?>
      <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
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
      <?php if ($_smarty_tpl->tpl_vars['cartCntItems']->value > 0) {
echo $_smarty_tpl->tpl_vars['cartCntItems']->value;
} else { ?>empty<?php }?>
    </span>
</div><?php }
}
