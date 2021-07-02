<!--15 part add pages register php-->
<?php
use App\services\Page;
if($_SESSION[ 'user' ]) {
	\App\services\Router::redirect('/profile');
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
	<h2 class="mt-4">Sing Up</h2>
    <!--24 add method post and enctype and action with page in register php-->
    <form class='mt-4' action="/auth/register" method='post' enctype="multipart/form-data">
        <div class='mb-3'>
<!--            15-2 change register with boostrap-->
            <label for='email'>Email address</label>
            <!--26 part add name in form register php-->
            <input type='email' name="email" class='form-control' id='email'>
        </div>
        <div class='mb-3'>
            <!--            15-2 change register with boostrap-->
            <label for='username'>Username</label>
            <!--26 part add name in form register php-->
            <input type='text' name="username" class='form-control' id='username'>
        </div>
        <div class='mb-3'>
            <!--            15-2 change register with boostrap-->
            <label for='full_name'>Full Name</label>
            <!--26 part add name in form register php-->
            <input type='text' name="full_name" class='form-control' id='full_name'>
        </div>
        <div class='mb-3'>
            <!--            15-2 change register with boostrap-->
            <label for='avatar'>User Avatar</label>
            <!--26 part add name in form register php-->
            <input type='file' name="avatar" class='form-control' id='avatar'>
        </div>
        <div class='mb-3'>
            <!--            15-2 change register with boostrap-->
            <label for='password'>Password</label>
            <!--26 part add name in form register php-->
            <input type='password' name="password" class='form-control' id='password'>
        </div>
        <div class='mb-3'>
            <!--            15-2 change register with boostrap-->
            <label for='password_conform'>Password Conformation</label>
            <!--26 part add name in form register php-->
            <input type='password' name="password_conform" class='form-control' id='password_conform'>
        </div>
        <!--            15-2 change register with boostrap-->
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
</div>
</body>
</html>

