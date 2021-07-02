<?php
use App\services\Page;
if(!$_SESSION['user']) {
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
        <h1 class="display-4">Hello <?= $_SESSION['user']['full_name']; ?></h1>
        <img src="<?= $_SESSION['user']['avatar']; ?>" height="300" alt="">
    </div>
</div>
</body>
</html>
