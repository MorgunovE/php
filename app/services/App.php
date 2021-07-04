<?php


namespace App\services;

//19 part add class Add in services
class App
{
//	19-1 initial function
	public static function start() {
//		21-3 init lib
		self::libs ();
//		22-6 init db
		self::db();
	}
//21 add config app in App php-
	public static function libs() {
		$config = require_once 'config/app.php';
//		21-1 all libs foreach
		foreach($config['libs'] as $lib ) {
//			21-2 add require files
			require_once 'libs/' . $lib . '.php';
		}
	}
//22 init db method that init db
	public static function db() {
//		22-3 method bd in App php
		$config = require_once 'config/db.php';
//		22-4 enable db
		if($config['enable']) {
//			22-5 redbeans method https://redbeanphp.com/index.php?p=/connection
//			23-3 add \ to R class in App php
			\R::setup( 'mysql:host=' .$config['host'] .';port='.$config['port'].';dbname='.$config['dbname'], $config['user'], $config['password'] );
//			22-6 test db
			if(!\R::testConnection()){
				die('Error database connection');
			}
		}
	}
}