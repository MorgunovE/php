<?php
$dbData = [
	'dbserver' => 'localhost',
	'dbuser' => 'root',
	'dbname' => 'phpU',
	'dbpass' => '',
];
require_once 'model.php';
require_once 'controller.php';

function pr ( $s )
{
	echo "<pre>";
	print_r ( $s );
	echo '</pre>';
}