<?php

$login = $_POST['login'];
$password = $_POST['password'];

$users = include "users.php";

foreach ( $users as $user ) {
	if ($user['login'] == $login && $user['password'] == $password){
		session_start();
		$_SESSION["name"] = $user['name'];
//		setcookie("name", $user['name']);
		header("Location: profile.php");
		break;
	}
}