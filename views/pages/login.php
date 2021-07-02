<!--7 part-->
<?php
//14-3 add class Page to login
use App\services\Page;
//<!--part 37 add if session redirect in login to profiles-->
if($_SESSION[ 'user' ]) {
    \App\services\Router::redirect('/profile');
}

?>
<!doctype html>
<html lang="en">

<?php
//8-1 link css in login
//<!--13-1 add in login and 404 navbar and head-->
Page ::part ( 'head' );
?>
<body>
<?php
//9 part add nav bar form https://getbootstrap.com/docs/5.0/components/
//in login next navbar
//<!--13-1 add in login and 404 navbar and head-->
Page ::part ( 'navbar' );
?>
<div class="container">
<!--    11-1-->
    <h2 class="mt-4">Sing in</h2>
<!--    11 part add form in login-->
    <!--34-4 change for method post and action-->
    <form class='mt-4' action="/auth/login" method="POST">
        <div class='mb-3'>
            <!--34-5 part change login boostrap-->
            <label for='email' class='form-label'>Email address</label>
            <!--34-2 change-->
            <input type='email' name="email" class='form-control' id='email'>
        </div>
        <div class="mb-3">
            <!--34-3 change-->
            <label for="password" class="form-label">Password</label>
            <!--34-4 change-->
            <input type="password" name='password' class="form-control" id="password">
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>
</body>
</html>
