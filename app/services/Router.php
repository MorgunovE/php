<?php

//4-1 part namespaces
namespace App\services;


class Router
{
//	4-3 all uri on site
	private static $list = [];

//	4-2 method for uri
	/**Method for registration rout for usual page
	 * @param $uri
	 * @param $page_name
	 */
	public static function page ( $uri, $page_name )
	{
		self ::$list[] = [
			"uri" => $uri,
			"page" => $page_name,
		];
//		4-3 use routes php
	}
//24-2 add method(controllers) for post in Router php
//<!--27 part change post method in Router php
//add $formdata = false, $files = false -->
	public static function post ( $uri, $class, $method, $formdata = false, $files = false ) // 25-3 change for class in Router php
	{
//		25-5 put parameters in method post in Router php
		self ::$list[] = [
			'uri' => $uri,
			'class' => $class,
			'method' => $method,
			'post' => true, // 25-6 add that its method post not a page
			"formdata" => $formdata, //27-1 add
			"files" => $files, //27-1 add
		];
	}
//4-4
	public static function enable ()
	{
//6-1 add query
		$query = $_GET[ 'q' ];
//6-2 foreach all uri
		foreach ( self ::$list as $route ) {
			if ( $route[ 'uri' ] === '/' . $query ) { // 6-3 add / for url
//				25-7 add if for post method
				if ( $route[ "post" ] === true && $_SERVER[ 'REQUEST_METHOD' ] === "POST" ) { //REQUEST_METHOD with what is method that we use for action go to this page
					$action = new $route[ "class" ]; // 25-8 new class
					$method = $route[ "method" ]; // 25-9 add method from class
//					27-2 add if in Router php in enable method
					if ( $route[ 'formdata' ] && $route[ 'files' ] ) {
						$action -> $method( $_POST, $_FILES ); // 25-11 get parameters from POST
//						27-3 add if in Router php in enable method
					} elseif ( $route[ 'formdata' ] && !$route[ 'files' ] ) {
						$action -> $method( $_POST );// 25-11 get parameters from POST
//						27-4 add if in Router php in enable method
					} else {
						$action -> $method();// 25-12 dont get parameters from POST
					}
				} else {
//					6-4 find page for client from views/pages path connect index php
					require_once 'views/pages/' . $route[ "page" ] . '.php';
				}
//				7-1 if pages dosent exist
				die(); // 25-10 add  to stop code
			}

		};
//		7-2 if pages dosent exist
		self ::error ( '404' ); //29-1 change method name
	}
//7-2-1 if pages dosent exist
	public
	static function error ( $error ) //29-1 change method name to error
	{
		//7-4 find in Routes php page for client from views/errors  path connect index php
		require_once 'views/errors/' . $error . '.php'; //29-2 connect to pages error
	}

//<!--29 part add method redirect in Router php-->
//<!--30 part add method in Router php-->
	public
	static function redirect ( $uri ) // uri to redirect
	{
		header( 'location:'. $uri); // go to page uri
	}

}