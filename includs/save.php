<?php
include_once "db.php";

$id = $_POST["id"];
$name = $_POST["name"];
$login = $_POST["login"];
$email = $_POST["email"];
$password = $_POST["password"];

$user = R::load('users', $id);

//$user = R::findOne('users', 'login = ?', [$login]);

$user["name"] = $name;
$user["login"] = $login;
$user["email"] = $email;
$user["password"] = $password;

if(!R::store($user)){
	die("Changes didnt save");
}else{
	header('Location: /user_edit.php?id='. $id);
}