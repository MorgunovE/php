<?php
/* Smarty version 3.1.39, created on 2021-06-25 14:56:14
  from '/opt/lampp/htdocs/php/views/default/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_60d5d26eb86d95_45215099',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '056520b6ce2901a93e8b5377bf680981e1b058a6' => 
    array (
      0 => '/opt/lampp/htdocs/php/views/default/header.tpl',
      1 => 1624625219,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:leftcolumn.tpl' => 1,
  ),
),false)) {
function content_60d5d26eb86d95_45215099 (Smarty_Internal_Template $_smarty_tpl) {
?><html>

<head>
    <title><?php echo $_smarty_tpl->tpl_vars['pageTitle']->value;?>
</title>
    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['templateWebPath']->value;?>
css/main.css" type="text/css">
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/jquery-3.6.0.min.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 type="text/javascript" src="/js/main.js"><?php echo '</script'; ?>
>
</head>

<body>
    <div id="header">
        <h1>My shop on PhP</h1>
    </div>

<?php $_smarty_tpl->_subTemplateRender('file:leftcolumn.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div id="centerColumn">

<?php }
}
