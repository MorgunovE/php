<?php
require "db.php";

$id = $_POST['id'];
$title = $_POST['title'];
$body = $_POST['body'];

$update = mysqli_query($db, "UPDATE `posts` SET `title` = '$title', `body` = '$body' WHERE `posts`.`id` = '$id'");

if(!$update){
	die("Error update Post");
}else{
	die("Post updated");
}