<?php
/**
 * model for products
 */

/**
 * @param null $limit limit goods
 * @return array goods
 */
function getLastProducts ( $limit = null )
{
	$sql = "SELECT * FROM `products` ORDER BY `id` DESC";
	if ( $limit ) {
		$sql .= " LIMIT {$limit}";
	}

	$dblocation = 'localhost';
	$dbname = 'my_shop';
	$dbuser = 'root';
	$dbpasswd = '';

	$mysqli = new mysqli( $dblocation, $dbuser, $dbpasswd, $dbname );

	$rs = mysqli_query ( $mysqli, $sql );

	return createSmartyRsArray ( $rs );
}

/**
 * @param $itemId id category
 * @return array|false|string[]|null string of category
 */
function getProductsByCat ( $itemId )
{
	$itemId = intval ( $itemId );
	$sql = "select * 
					from products 
					where category_id = '{$itemId}'";

	$dblocation = 'localhost';
	$dbname = 'my_shop';
	$dbuser = 'root';
	$dbpasswd = '';

	$mysqli = new mysqli( $dblocation, $dbuser, $dbpasswd, $dbname );

	$rs = mysqli_query ( $mysqli, $sql );

	return createSmartyRsArray ( $rs );
}

function getProductById ( $itemId )
{
	$itemId = intval ( $itemId );
	$sql = "select * 
					from products 
					where id = '{$itemId}'";

	$dblocation = 'localhost';
	$dbname = 'my_shop';
	$dbuser = 'root';
	$dbpasswd = '';

	$mysqli = new mysqli( $dblocation, $dbuser, $dbpasswd, $dbname );

	$rs = mysqli_query ( $mysqli, $sql );

	return mysqli_fetch_assoc ( $rs );
}

function getProductsFromArray($itemIds) {

	$strIds = implode ( $itemIds, ', ' );

	$sql = "select * 
					from products 
					where id in ({$strIds})";

	$dblocation = 'localhost';
	$dbname = 'my_shop';
	$dbuser = 'root';
	$dbpasswd = '';

	$mysqli = new mysqli( $dblocation, $dbuser, $dbpasswd, $dbname );

	$rs = mysqli_query ( $mysqli, $sql );

	return createSmartyRsArray ( $rs );
}
