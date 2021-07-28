<?php

//6
class CController
{
	public function __construct ()
	{

	}

	public function GetData ( $pagetype, $arParams )
	{
		$data = new CModel();
//			10
		$result = $data -> GetData ( $pagetype, $arParams );

		return $result;
	}

	public function SetPage ( $pagetype, $arParams )
	{
		if ( $pagetype == 'news' ) {
			$result = $this -> GetData ( $pagetype, $arParams );
		}
//		11
		if ( $pagetype == 'contacts' ) {
			$result = $this -> GetData ( $pagetype, $arParams );
		}
		return $result;
	}
}