<!--32 part add profile and admin page in views/pages-->
<!--39 part add admin page in routes-->
<?php
use App\services\Page;
//<!--39-1 if group admin view the page
if($_SESSION['user'] && $_SESSION['user']['group'] != 2) {
	//<!--39-2 redirect
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
