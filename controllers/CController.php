<?php
//3
require_once ( 'models/CModel.php' );
//5
require_once ( 'views/CView.php' );

class CController
{
	public $model;
	public $view;

	public function SetMainPage ()
	{
		$model = new CModel();
		$resultModal = $model -> GetData ();

		return $resultModal;
	}
}