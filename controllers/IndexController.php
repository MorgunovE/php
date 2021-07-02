<?php

	include_once 'library/models/CategoriesModel.php';
include_once 'library/models/ProductsModel.php';

	function testAction()
	{
		echo 'IndexController.php > testAction';
	}

	function indexAction($smarty)
	{
		$rsCategories = getAllMainCatsWithChildren();
		$rsProducts = getLastProducts(16);

		$smarty->assign('pageTitle', 'Main Page');
		$smarty->assign('rsCategories', $rsCategories);
		$smarty->assign('rsProducts', $rsProducts);

		loadTempalte($smarty, 'header');
		loadTempalte($smarty, 'index');
		loadTempalte($smarty, 'footer');
	}