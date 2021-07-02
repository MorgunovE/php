<?php
/**
 * CartController.php
 */

include_once 'library/models/CategoriesModel.php';
include_once 'library/models/ProductsModel.php';

function addtocartAction ()
{
	$itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
	if(!$itemId) return false;

	$resData = [];

	if(isset($_SESSION['cart']) && array_search ( $itemId, $_SESSION[ 'cart' ]) === false)
	{
		$_SESSION['cart'][] = $itemId;
		$resData['cntItems'] = count($_SESSION['cart']);
		$resData['success'] = 1;
	}else
	{
		$resData['success'] = 0;
	}
	echo json_encode($resData);
}

function removefromcartAction ()
{
	$itemId = isset($_GET['id']) ? intval($_GET['id']) : null;
	if(!$itemId) exit();

	$resData = [];
	$key = array_search ( $itemId, $_SESSION['cart']);

	if($key !== false)
	{
		unset($_SESSION['cart'][$key]);
		$resData['success'] = 1;
		$resData['cntItems'] = count($_SESSION['cart']);
	}else
	{
		$resData['success'] = 0;
	}
	echo json_encode($resData);
}

function indexAction($smarty) {
	$itemsIds = isset($_SESSION['cart']) ? $_SESSION['cart'] : array();
	$rsCategories = getAllMainCatsWithChildren();
	$rsProducts = getProductsFromArray($itemsIds);

	$smarty -> assign ( 'pageTitle', 'Cart' );
	$smarty -> assign ( 'rsCategories', $rsCategories );
	$smarty -> assign ( 'rsProducts', $rsProducts );

	loadTempalte($smarty, 'header');
	loadTempalte($smarty, 'cart');
	loadTempalte($smarty, 'footer');
}