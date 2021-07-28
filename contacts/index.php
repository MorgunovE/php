<?php
//4
require_once '../core/cfg.php';

//pr ( $dbpass );
//6
$page = new CController;
$arParams = [
];
$result = $page -> SetPage ( 'contacts', $arParams );
pr ( $result );

