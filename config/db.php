<?php

/**
 * connect to DB
 */

$dblocation = 'localhost';
$dbname = 'my_shop';
$dbuser = 'root';
$dbpasswd = '';

$db = mysqli_connect($dblocation, $dbuser, $dbpasswd);

if(!$db)
{
	echo 'Error to connect to DB';
	exit();
}

//mysqli_set_charset('utf8');

if(!mysqli_select_db($db, $dbname))
{
	echo "Error to connect $dbname";
	exit();
}