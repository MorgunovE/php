<?php
//4
require_once '../core/cfg.php';

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
include('../view/header.php');
  if(isset($_GET['id'])){
    $arParams['news_id'] = $_GET['id'];
    $result = $page->SetPage('single-news', $arParams);
  }else{
    $result = $page->SetPage('news', $arParams);
//pr ( $result );
  }

include('../view/footer.php');
