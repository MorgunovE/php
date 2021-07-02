<!--7-3 add errors page in view errors-->
<!--    12 change 404-->
<?php
use App\services\Page;
?>
<!doctype html>
<html lang="en">
<!--13-1 add in login and 404 navbar and head-->
<?php
Page ::part ( 'head' );
?>
<body>
<!--13-1 add in login and 404 navbar and head-->
<?php
Page ::part ( 'navbar' );
?>
<div class='container'>
<!--    12-1-->
    <h1 class='mt-4'>404 - page not found</h1>
</div>
</body>
</html>
