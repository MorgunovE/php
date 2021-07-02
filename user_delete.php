<?php
include_once "includs/db.php";
$id = $_GET["id"];
$user = R::load('users', $id);

if(!R::trash($user)){
	die("User didnt delete");
}else{
	header('Location: /');
}


