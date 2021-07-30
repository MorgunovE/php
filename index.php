<?php
//4
require_once 'core/cfg.php';

//pr ( $dbpass );
//6
$page = new CController;
$arParams = [
//  24
  'LIMIT' => 6,
//  29
  'ORDERBY' => 'DATE',
  'ORDER' => 'DESC'
];

include('view/header.php');
$result = $page->SetPage('main', $arParams);
//pr ( $result );
include('view/footer.php');
