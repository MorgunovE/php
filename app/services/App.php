<?php


namespace App\services;


class App
{
	public static function start() {
		self::libs ();
		self::db();
	}
	public static function libs() {
		$config = require_once 'config/app.php';
		foreach($config['libs'] as $lib ) {
			require_once 'libs/' . $lib . '.php';
		}
	}
	public static function db() {
		$config = require_once 'config/db.php';
		if($config['enable']) {
			\R::setup( 'mysql:host=' .$config['host'] .';port='.$config['port'].';dbname='.$config['dbname'], $config['user'], $config['password'] );
			if(!\R::testConnection()){
				die('Error database connection');
			}
		}
	}
}