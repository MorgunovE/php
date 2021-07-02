<?php
include_once "includs/db.php";

//$id = $_GET["id"];
$login = $_GET["login"];
$email = $_GET["email"];
//$user = R::load('users', $login);
$user = R::findOne('users','login = ? AND email = ?', [$login, $email]);
if (!$user["name"]){
	die("User didnt find");
}
?>
<h1>Hello, <?= $user["name"];?></h1>
<h3>Login: <?= $user["login"];?></h3>
<h3>Email: <?= $user["email"];?></h3>
