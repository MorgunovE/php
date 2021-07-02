<?php
require "db.php";

//INSERT INTO `posts` (`id`, `title`, `body`, `date`) VALUES (NULL, NULL, NULL, NULL)
$title = $_POST["title"];
$body = $_POST["body"];
$date = date("Y-m-d");
$post = mysqli_query($db, "INSERT INTO `posts` (`id`, `title`, `body`, `date`) VALUES (NULL, '$title', '$body', '$date')");
if(!$post ){
	die("Error public post");
}
die("Post is public");
