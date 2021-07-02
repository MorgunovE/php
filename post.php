<?php
require "vendor/db.php";
$id = $_GET['id'];
$post = mysqli_query($db, "SELECT * FROM `posts` WHERE `id` = '$id'");
$post = mysqli_fetch_assoc($post);
//print_r($post);
?>
<h1><?= $post["title"];?></h1>
<p><?= $post["body"];?></p>
<p><i><?= $post["date"];?></i></p>

<ul>

    <?php
    $comments = mysqli_query($db, "SELECT * FROM `comments`
WHERE `post_id` = '$id'");
    $comments = mysqli_fetch_all($comments);
    foreach ( $comments as $comment) {
    ?>
        <li><?= $comment[1];?></li>
    <?php
    }
    ?>


</ul>