<?php
/* Smarty version 3.1.39, created on 2021-06-25 06:48:31
  from '/opt/lampp/htdocs/php/views/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d5601fad42d7_29147174',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '46a12f12cc492476e9b9eae5ff0369d18a243819' => 
    array (
      0 => '/opt/lampp/htdocs/php/views/default/index.tpl',
      1 => 1624596510,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d5601fad42d7_29147174 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsProducts']->value, 'item', false, NULL, 'products', array (
  'iteration' => true,
));
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']++;
?>
		<div style="float: left; padding: 0px 30px 40px 0px;" >
			<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/">
				<img src="/images/products/<?php echo $_smarty_tpl->tpl_vars['item']->value['image'];?>
" width="100" alt="">
			</a><br />
			<a href="/product/<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
/"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
		</div>
		<?php if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_products']->value['iteration'] : null) % 3 == 0) {?>
				<div style="clear: both"></div>
		<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>



<?php }
}
