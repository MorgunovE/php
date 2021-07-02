<?php
/* Smarty version 3.1.39, created on 2021-06-28 13:00:27
  from '/opt/lampp/htdocs/php/views/default/product.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d9abcb93aa91_30971010',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a10333c29acf1c03c3442121bdcb3b7c79725675' => 
    array (
      0 => '/opt/lampp/htdocs/php/views/default/product.tpl',
      1 => 1624877970,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_60d9abcb93aa91_30971010 (Smarty_Internal_Template $_smarty_tpl) {
?>
<h3><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['name'];?>
</h3>

<img width="575" src="/images/products/<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['image'];?>
" alt="">
Price: <?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['price'];?>

<a id="removeCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if (!$_smarty_tpl->tpl_vars['itemInCart']->value) {?>style="display:none;" <?php }?> href="#" onclick="removeFromCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Remove from cart">Remove from cart</a>
<a id="addCart_<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
" <?php if ($_smarty_tpl->tpl_vars['itemInCart']->value) {?>style="display:none;" <?php }?> href="#" onclick="addToCart(<?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['id'];?>
); return false;" alt="Add to cart">Add to cart</a>
<p>Description <br /><?php echo $_smarty_tpl->tpl_vars['rsProduct']->value['description'];?>
</p><?php }
}
