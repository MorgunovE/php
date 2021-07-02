<?php
	include_once "includs/db.php";
	$id = $_GET["id"];
	$user = R::load('users', $id);
?>
<form action="includs/save.php" method="post">
	<input type="hidden" name="id" value="<?= $user["id"];?>">
	<p>Name</p>
	<input type="text" name="name" value="<?= $user["name"];?>">
	<p>Login</p>
	<input type="text" name="login" value="<?= $user["login"];?>">
	<p>Email</p>
	<input type="text" name="email" value="<?= $user["email"];?>">
	<p>Password</p>
	<input type="password" name="password" value="<?= $user["password"];?>">
	<br>
	<br>
	<button type="submit">Save user</button>
</form>
