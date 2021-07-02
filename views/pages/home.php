<?php
use App\services\Page;
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
        <h1 class="display-4">Hello</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <hr class="my-4">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
        <a href="/login" class="btn btn-primary btn-lg" role="button">Sing In</a>
    </div>
</div>
</body>
</html>
