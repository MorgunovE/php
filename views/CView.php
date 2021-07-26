<?php
//11
//require_once ( '../controllers/CController.php' );

class CView
{
	public function ViewMainPage ()
	{
		$controller = new CController();
		$arResult = $controller->SetMainPage();
		include 'view_mainpage.php';
		return $arResult;
	}

//	8
	public function GetHeader ()
	{
		return 'views/header.php';
	}

//	8-1
	public function GetFooter ()
	{
		return 'views/footer.php';
	}
}