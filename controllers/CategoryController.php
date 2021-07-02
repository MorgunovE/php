<?php

/**
 * Controller page of categories
 */

include_once 'library/models/CategoriesModel.php';
include_once 'library/models/ProductsModel.php';

/**
 * form of page categories
 * @param $smarty composer
 */
function indexAction($smarty)
{
	$catId = isset($_GET['id']) ? $_GET['id'] : null;
	if(!$catId) exit();

	$rsChildCats = null;
	$rsProducts = null;
	$rsCategory = getCatById($catId);

	if($rsCategory['parent_id'] == 0)
	{
		$rsChildCats = getChildrenForCat($catId);
	} else
	{
		$rsProducts = getProductsByCat($catId);
	}

	$rsCategories = getAllMainCatsWithChildren();

	$smarty->assign('pageTitle', 'Goods of Category' . $rsCategory['name']);

	$smarty->assign('rsCategory', $rsCategory);
	$smarty->assign('rsProducts', $rsProducts);
	$smarty->assign('rsChildCats', $rsChildCats);

	$smarty->assign('rsCategories', $rsCategories);

	loadTempalte($smarty, 'header');
	loadTempalte($smarty, 'category');
	loadTempalte($smarty, 'footer');

}



