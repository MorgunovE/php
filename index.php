<?php
//	echo "Hi";
//	$name = "evgen";
//	echo $name;
//	$string = "some text";
//	$number_int = 123;
//	$number_float = 123.45;
//	$bool = true;
//	echo "Hi,$name";
//	echo 'Hi' . $name;
//	echo 'Hi \'' . $name . '\' its me';
//const NAME = 'Evgen';
//define('NAME', 'Evgen');
//echo NAME;
//define('PORT', 8080);
//define('LOGIN', 'root');
//define("PASSWORD", '12314124');
//echo "login - " . LOGIN . "\n password - " . PASSWORD;
//$names = ['evgen', 'pavel', 'dima'];
//$find = 'max';
//$result = (in_array($find, $names) == true)?"We find him":"We didnt find him";
//if(in_array($find, $names) == true){
//	$result = "We find him";
//}else{
//	$result = "We didnt find him";
//}
//echo $result;
//$names[] = 'Max';
//echo print_r($names);
//unset($names[3]);
//var_dump(in_array('Max', $names));
//if(in_array('Max', $names) === true){
//	echo 'Finded ' . 'Max';
//}else{
//	echo 'Didnt find';
//};
//$names[1] = 'Iliay';
//print_r($names);
//$user = [
//	"name" => "Ivan",
//	"surname" => "Ivanov",
//	"age" => 23,
//];
//print_r($user);

//$config = [
//	"URL" => 123,
//	"DB_LOGIN" => 'root',
//];

//$users = [
//	[
//		"name" => "Ivan",
//		"surname" => "Ivanov",
//		"age" => 23,
//	],
//	[
//		"name" => "Pavel",
//		"surname" => "Ivanov",
//		"age" => 30,
//	],
//	[
//		"name" => "Max",
//		"surname" => "Ivanov",
//		"age" => 35,
//	]
//];
//print_r($users[1]["name"]);
//echo 'Name - ' . $user["name"];

//$age = 15;
//$country = 'RUS';
////echo $age;
//if(($age >= 18 && $age <= 30) || $country == "RUS"){
//	echo " you're COOL";
//} else{
//	echo " you're NO COOL";
//}

//$mood = 'hjk,hj';

//if($mood == 'bad'){
//	echo 'All will Be cool bro';
//}elseif ($mood == 'fine'){
//	echo "you're cool bro";
//}else{
//	echo 'Whats up bro?';
//}
//switch ($mood){
//	case 'bad':
//		echo ' All will Be cool bro';
//		break;
//	case 'fine':
//		echo " you're cool bro";
//		break;
//	default:
//		echo 'Whats up bro?';
//}

//$posts = [
//	[
//		"id" =>1,
//		"title" => "lorem" . 1,
//		"public" => true
//	],
//	[
//		"id" =>2,
//		"title" => "lorem" . 2,
//		"public" => false
//	],
//	[
//		"id" =>3,
//		"title" => "lorem" . 3,
//		"public" => true
//	],
//	[
//		"id" =>4,
//		"title" => "lorem" . 4,
//		"public" => true
//	],
//];
//$names = ['evgen', 'pavel', 'dim'];
//$names[] = "max";
//$i = 0;
//$countPosts = 0;
//foreach ($posts as $post){
//
//	if ($countPosts == 2){
//		break;
//	}
//
//	if ($post["public"] == false){
//		continue;
//	}
//
//	echo "Name - ". $post["id"]."\n";
//	echo "title - ". $post["title"]."\n\n\n";
//
//	$countPosts++;
//}
//while ($i < count($names)){
//	echo "Name - $names[$i]\n";
//	$i++;
//}
//echo count($names);
//for($i = 0; $i < count($names); $i++){
//	echo "Name - $names[$i]\n";
//}

//function myFunc(){
//	$number = 983 /83 *3;
//	echo "we get number: $number";
//}
//myFunc();
//function myFunc($a = 10, $b = 40){
// echo $a + $b;
//}

//myFunc(10, 5);
//myFunc();
//function myFunc($a = 10, $b = 40){
//	return (($a + $b) >= 100)? true:false;
//}

//myFunc(10, 5);
//if(myFunc(80,10)){
//	echo "it's bigger 100";
//}else{
//	echo "it's lower 100";
//}
//function myFunc($a = 10, $b = 40){
// return $a + $b;
//}
//$param = 'myFunc';
//echo $param();

//include "test.php";
//require "test.php";
//$config = require "config.php";
//print_r($config);
//echo $config["host"];
//echo $name;
//echo $age;
//require_once "test.php";
//require "test.php";
//require_once "test.php";

//require_once

//print_r($_GET);
//http://php/?name=Evgen&age=33
//http://php/?id=1

//$id = $_GET['id'];
//echo $id;
//$posts = [
//	[
//		"id" =>1,
//		"title" => "lorem" . 1,
//		"public" => true
//	],
//	[
//		"id" =>2,
//		"title" => "lorem" . 2,
//		"public" => false
//	],
//	[
//		"id" =>3,
//		"title" => "lorem" . 3,
//		"public" => true
//	],
//	[
//		"id" =>4,
//		"title" => "lorem" . 4,
//		"public" => true
//	],
//];
//
//foreach ($posts as $post){
//	if($post["id"] == $id){
//		echo "You chose post - " .$post["title"];
//		break;
//	}
//}
//<form action="test.php" method="POST">
//	<p>Name</p>
//	<input type="text" name="Name">
//	<p>Surname</p>
//	<input type="text" name="Surname">
//	<p>Age</p>
//	<input type="text" name="Age"> <br> <br>
//	<button type="submit"> Submit </button>
//</form>
//setcookie('login', 'root');
//setcookie('password', '12342134');
//print_r($_COOKIE);
//echo $_COOKIE["login"];
//unset($_COOKIE["password"]);
//print_r($_COOKIE);
//setcookie('password', NULL);
//print_r($_COOKIE);
//session_start();
//$_SESSION["login"] = 'New';
//print_r($_SESSION);
//unset($_SESSION["login"]);
//print_r($_SESSION);
//echo time();
//require "vendor/db.php";
//INSERT INTO `posts` (`id`, `title`, `body`, `date`) VALUES (NULL, NULL, NULL, NULL)
//$title = "Lorem 5";
//$body = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam architecto, consequuntur deserunt dolore, eaque impedit libero minima nemo nesciunt odio officia optio perferendis, porro repellat reprehenderit rerum sunt voluptates.";
//$date = date("Y-m-d");
//mysqli_query($db, "INSERT INTO `posts` (`id`, `title`, `body`, `date`) VALUES (NULL, '$title', '$body', '$date')");
//echo data();
//$date = microtime(true);
//echo $date;
//$date = date("Y-m-d", $date - 200000);
//echo $date;
//include_once "includs/db.php";
//$user = R::dispense('users');
//$user["name"] = "Max";
//$user["login"] = "max123";
//$user["email"] = "max@test.com";
//$user["password"] = "12345";
//R::store($user);
//R::wipe('users');
//$users = R::findAll('users');
//print_r($users);
//$names = ['Alex', "ivan", "max"];
//
//require_once "functions.php";
//require_once "Name.php";

//$new_list = add_name($names, "Fun-Name");
//$new_list2 = remove_name($names, "Alex");
//$new_list3 = update_name($names, 3, "New-Fun-Name");
//
//$name = new Name();
//$name ->names = $names;
//$name ->add_name = "max-Next";
//
//$name2 = new Name();
//$name2->names = ["new-Max"];
//$name2->add_name = "New-Name-Maxa";
//
//$name3 = new Name();
//$name3->names = $names;
//$name3->remove_name = "Alex";
//
//$name4 = new Name();
//$name4->names = $names;
//$name4->name_key = 1;
//$name4->update_name = "Mega-Name";
//$name4->update_name() ;
//
//$name4->add_name ="Add-name";
//$name4->add_name();
//
//$name4->remove_name = "max";
//$name4->remove_name();


//$name ->add_name($names, "Max-Power");

//function add_name($names, $name){
//	$names[] = $name;
//	return $names;
//}
//
//function remove_name($names, $remove_name){
//	foreach ( $names as $key => $name) {
//		if($remove_name === $name){
//			unset($names[$key]);
//		}
//	}
//	return $names;
//}
//
//function update_name($names, $key, $new_name){
//	$names[$key] = $new_name;
//	return $names;
//}

//$list = add_name($names, "Max");
//require_once "Car.php";
//$car = new Car("Honda", "120", "2011", "red");

//$car->model = "Honda";
//$car->horsepower = 120;
//$car->year = 2011;
//$car->color = "red";

//$car->show();
//$object = (object)[
//        "key" => "value"
//];
//echo $object->key;
//require_once "Newcar.php";
//$newcar = new Newcar("Honda", "2011", "160");
//$newcar->show();
//echo '<br><br>';
//echo $newcar->getPrice();
//echo '<br><br>';
//echo Newcar::getPrice("Honda", "2011", "160");
//echo $newcar::staticMethod();
//Newcar::$message = "some text";
//echo Newcar::showMessage();
//echo '<pre>';
//var_dump($newcar->getTax());
//var_dump($newcar->test());
//print_r($newcar->info());
//echo '</pre>';
//require_once "App/Cars/Newcar.php";
//require_once __DIR__ . '/vendor/autoload.php';
//use App\Other\Other;
//$newcar = new \App\Cars\Newcar( 'Honda', '2011', '160' );
//echo '<pre>';
//Other::test();
//var_dump($newcar->test());
//print_r($newcar->show());
//echo '</pre>';
//echo Newcar::getPrice("Honda", "2011", "160");
//$newcar->show();
require_once __DIR__ . "/vendor/autoload.php";
require_once __DIR__ . "/router/routes.php";
//\App\services\Router::init ();
?>
<!--<i><h3>Tax for Car - --><?//= $newcar->getTax(); ?><!--</h3></i>-->
<!--<pre>-->
<!--  --><?php //var_dump($name ->add_name());?>
<!--</pre>-->
<!--<pre>-->
<!--  --><?php //var_dump($name2 ->add_name());?>
<!--</pre>-->
<!--<pre>-->
<!--  --><?php //var_dump($name3 ->remove_name());?>
<!--</pre>-->
<!--<pre>-->
<!--  --><?php //var_dump($name4 ->names);?>
<!--</pre>-->
<!--<form action="includs/add.php" method="post">-->
<!--    <p>Name</p>-->
<!--    <input type="text" name="name">-->
<!--    <p>Login</p>-->
<!--    <input type="text" name="login">-->
<!--    <p>Email</p>-->
<!--    <input type="text" name="email">-->
<!--    <p>Password</p>-->
<!--    <input type="password" name="password">-->
<!--    <br>-->
<!--    <br>-->
<!--    <button type="submit">Add user</button>-->
<!--</form>-->
<!---->
<!--<table>-->
<!--    <tr>-->
<!--        <th>id</th>-->
<!--        <th>name</th>-->
<!--        <th>login</th>-->
<!--        <th>email</th>-->
<!--    </tr>-->
<!--    --><?php
//    foreach ( $users as $user) {
//        ?>
<!--            <tr>-->
<!--                <td>--><?//= $user["id"];?><!--</td>-->
<!--                <td>--><?//= $user["name"];?><!--</td>-->
<!--                <td>--><?//= $user["login"];?><!--</td>-->
<!--                <td>--><?//= $user["email"];?><!--</td>-->
<!--                <td><a href="user.php?login=--><?//= $user["login"];?><!--&email=--><?//= $user["email"];?><!--">Open</a></td>-->
<!--                <td><a href="user_edit.php?id=--><?//= $user["id"];?><!--">Change</a></td>-->
<!--                <td><a href="user_delete.php?id=--><?//= $user["id"];?><!--">Delete</a></td>-->
<!--            </tr>-->
<!--        --><?php
//    }
//    ?>
<!--</table>-->

<!--<h1>All names</h1>-->
<!---->
<?php
//    $names = R::find('users', 'name = ?', ["Super"]);
//?>
<!---->
<!--<table>-->
<!--    <tr>-->
<!--        <th>id</th>-->
<!--        <th>name</th>-->
<!--        <th>login</th>-->
<!--        <th>email</th>-->
<!--    </tr>-->
<!--	--><?php
//	foreach ( $names as $user) {
//		?>
<!--      <tr>-->
<!--          <td>--><?//= $user["id"];?><!--</td>-->
<!--          <td>--><?//= $user["name"];?><!--</td>-->
<!--          <td>--><?//= $user["login"];?><!--</td>-->
<!--          <td>--><?//= $user["email"];?><!--</td>-->
<!--          <td><a href="user.php?login=--><?//= $user["login"];?><!--&email=--><?//= $user["email"];?><!--">Open</a></td>-->
<!--      </tr>-->
<!--		--><?php
//	}
//	?>
<!--</table>-->
<!--<table>-->
<!--    <tr>-->
<!--        <th>ID</th>-->
<!--        <th>Title</th>-->
<!--        <th>Date</th>-->
<!--    </tr>-->
<!--    --><?php
//        require "vendor/db.php";
//        $posts = mysqli_query($db, "SELECT * FROM `posts`");
//        $posts = mysqli_fetch_all($posts);
//        foreach ( $posts as $post) {
//          ?>
<!--            <tr>-->
<!--                <td>--><?//= $post[0]?><!--</td>-->
<!--                <td>--><?//= $post[1]?><!--</td>-->
<!--                <td>--><?//= $post[3]?><!--</td>-->
<!--                <td><a href="post.php?id=--><?//= $post[0]?><!--">Open post</a></td>-->
<!--                <td><a href="post_edit.php?id=--><?//= $post[0]?><!--">Edit post</a></td>-->
<!--                <td><a href="vendor/delete.php?id=--><?//= $post[0]?><!--">Delete post</a></td>-->
<!--            </tr>-->
<!--          --><?php
//        }
////        print_r($posts);
//    ?>

<!--</table>-->
<!---->
<!--<form action="vendor/create.php" method="post">-->
<!--    <p>Title</p>-->
<!--    <input type="text" name="title">-->
<!--    <p>Body</p>-->
<!--    <textarea name="body"></textarea> <br> <br>-->
<!--    <button type="submit">Public post</button>-->
<!--</form>-->
<!--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam architecto, consequuntur deserunt dolore, eaque impedit libero minima nemo nesciunt odio officia optio perferendis, porro repellat reprehenderit rerum sunt voluptates.-->
<!--<form action="login.php" method="POST">-->
<!--	<p>Login</p>-->
<!--	<input type="text" name="login">-->
<!--	<p>Password</p>-->
<!--	<input type="password" name="password"> <br> <br>-->
<!--	<button type="submit">LoginOn</button>-->
<!--</form>-->
<!--<form action="upload.php" method="post" enctype="multipart/form-data">-->
<!--    <input type="file" name="image">-->
<!--    <button type="submit">upload</button>-->
<!--</form>--
>
