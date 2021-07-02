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
	<h2 class="mt-4">Sing Up</h2>
    <form class='mt-4'>
        <div class='mb-3'>
            <label for='email'>Email address</label>
            <input type='email' class='form-control' id='email'>
        </div>
        <div class='mb-3'>
            <label for='username'>Username</label>
            <input type='text' class='form-control' id='username'>
        </div>
        <div class='mb-3'>
            <label for='full_name'>Full Name</label>
            <input type='text' class='form-control' id='full_name'>
        </div>
        <div class='mb-3'>
            <label for='avatar'>User Avatar</label>
            <input type='file' class='form-control' id='avatar'>
        </div>
        <div class='mb-3'>
            <label for='password'>Password</label>
            <input type='password' class='form-control' id='password'>
        </div>
        <div class='mb-3'>
            <label for='password_conform'>Password Conformation</label>
            <input type='password' class='form-control' id='password_conform'>
        </div>
        <div class='mb-3 form-check'>
            <input type='checkbox' class='form-check-input' id='exampleCheck1'>
            <label class='form-check-label' for='exampleCheck1'>Check me out</label>
        </div>
        <button type='submit' class='btn btn-primary'>Submit</button>
    </form>
</div>
</body>
</html>

