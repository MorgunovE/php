<?php
require "vendor/db.php";
$id = $_GET['id'];
$post = mysqli_query($db, "SELECT * FROM `posts` WHERE `id` = '$id'");
$post = mysqli_fetch_assoc($post);
//print_r($post);
?>
<form action="vendor/update.php" method="post">
	<input type="hidden" name="id" value="<?= $post["id"];?>">
	<p>Title</p>
	<input type="text" name="title" value="<?= $post["title"];?>">
	<p>Body</p>
	<textarea name="body"><?= $post["body"];?></textarea> <br> <br>
	<button type="submit">Save changes</button>
</form>