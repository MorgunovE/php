<!--29-3 add files in view/error 500--->
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
<div class='container'>
    <!--29-4 change--->
    <h1 class='mt-4'>500 - error on Server</h1>
</div>
</body>
</html>
