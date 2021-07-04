<!--32 part add profile and admin page in views/pages-->
<?php
use App\services\Page;
//<!--33 part add if in profile page-->
if(!$_SESSION['user']) {
	//<!--33-1 add redirect
    \App\services\Router::redirect ( '/login');
}
?>
<!doctype html>
<html lang="en">
<?php
Page ::part ( 'head' );
?>
<body>
<?php
Page ::part ( 'navbar' );
?>
<div class="container">
    <div class="jumbotron mt-4">
<!--        33-2 add name-->
        <h1 class="display-4">Hello <?= $_SESSION['user']['full_name']; ?></h1>
        <!--        33-3 add avatar-->
        <img src="<?= $_SESSION['user']['avatar']; ?>" height="300" alt="">
    </div>
</div>
</body>
</html>
