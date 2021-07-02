<?php

require "db.php";

$id = $_GET["id"];

$delete = mysqli_query($db, "DELETE FROM `posts` WHERE `posts`.`id` = '$id'");

if (!$delete){
	die("Error delete post");
}else{
	die("Post deleted");
}

//"DELETE FROM `posts` WHERE `posts`.`id` = 5"