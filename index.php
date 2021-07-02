<?php


session_start ();

if ( !isset( $_SESSION[ 'cart' ] ) ) {
	$_SESSION[ 'cart' ] = [];
}

include_once 'config/config.php';
include_once 'config/db.php';
include_once 'library/mainFunctions.php';
include_once 'http.php';

$controllerName = isset( $_GET[ 'controller' ] ) ? ucfirst ( $_GET[ 'controller' ] ) : 'Index';

$actionName = isset( $_GET[ 'action' ] ) ? ucfirst ( $_GET[ 'action' ] ) : 'Index';

$smarty -> assign ( 'cartCntItems', count ( $_SESSION[ 'cart' ] ) );

loadPage ( $smarty, $controllerName, $actionName );

