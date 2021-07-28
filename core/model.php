<?php

//6
class Cmodel
{
	public $link;

	public function __construct ()
	{
		$connectData = [
			'dbserver' => 'localhost',
			'dbuser' => 'root',
			'dbname' => 'phpU',
			'dbpass' => '',
		];
		$this -> link = mysqli_connect ( $connectData[ 'dbserver' ], $connectData[ 'dbuser' ], $connectData[ 'dbpass' ], $connectData[ 'dbname' ] );
		if ( mysqli_connect_errno () ) {
			echo 'Connect error: ' . mysqli_connect_error ();
		}
	}

//7
	public function GetData ( $type, $arData )
	{
		//7
		if ( $type == 'news' ) {
			$sql = 'SELECT * FROM news LIMIT 0,6';
			$res = mysqli_query ( $this -> link, $sql );
			while ( $arRes = mysqli_fetch_assoc ( $res ) )
				$arResult[] = $arRes;
		}
//		12
		if ( $type == 'contacts' ) {
			$sql = 'SELECT * FROM contacts LIMIT 0,2';
			$res = mysqli_query ( $this -> link, $sql );
			while ( $arRes = mysqli_fetch_assoc ( $res ) )
				$arResult[] = $arRes;
		}
		return $arResult;
	}

	public function SetData ()
	{
	}
}