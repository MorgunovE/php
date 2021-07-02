<?php
/**
 * ProductController.php
 * Controller for goods page
 */

include_once 'library/models/ProductsModel.php';
include_once 'library/models/CategoriesModel.php';
/**
 * Form for page of good
 * @param $smarty composer
 */
function indexAction ( $smarty )
{
	$itemId = isset( $_GET[ 'id' ] ) ? $_GET[ 'id' ] : null;
	if ( $itemId == null ) exit();

	$rsProduct = getProductById ( $itemId );
	$rsCategories = getAllMainCatsWithChildren ();

	$smarty->assign( 'itemInCart', 0);
	if(in_array($itemId, $_SESSION['cart'])) {
		$smarty->assign('itemInCart', 1);
	}

	$smarty -> assign ( 'pageTitle', '' );
	$smarty -> assign ( 'rsCategories', $rsCategories );
	$smarty -> assign ( 'rsProduct', $rsProduct );

	loadTempalte($smarty, 'header');
	loadTempalte($smarty, 'product');
	loadTempalte($smarty, 'footer');

}