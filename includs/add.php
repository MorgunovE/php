<?php
include_once "db.php";

$name = $_POST["name"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];

$user = R::dispense('users');
$user["name"] = $name;
$user["login"] = $login;
$user["email"] = $email;
$user["password"] = $password;

if(!R::store($user)){
	die("User didnt add");
}else{
	header('Location: /');
}
