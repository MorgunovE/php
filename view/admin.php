<?php
//pr($arParams);
?>
<div id="main">
  <div id="menu">
    <a href="?act=options">Correct option</a>
    <a href="?act=news">Correct news</a>
    <a href="?act=users">Correct users</a>
  </div>
  <div id="content">
    <h1>Admin panel</h1>
    <? require_once 'admin-'.$arParams['ACT'].'.php'?>
  </div>
</div>