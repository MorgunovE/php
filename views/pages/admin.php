<?php
use App\services\Page;
if($_SESSION['user'] && $_SESSION['user']['group'] != 2) {
    \App\services\Router::redirect ( '/profile');
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
        <h1 class="display-4">Hello admin <?= $_SESSION['user']['full_name']; ?></h1>
        <img src="<?= $_SESSION[ 'user' ][ 'avatar' ]; ?>" height='300' alt=''>
    </div>
</div>
</body>
</html>
