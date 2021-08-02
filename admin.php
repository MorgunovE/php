<?php
  require_once 'core/cfg.php';
  $page = new CController;
  $arParams = [
    'ACT' => $_GET[ 'act' ],
  ];
  
  if(empty($_GET['act'])) {
    $arParams = [
      'ACT' => 'options',
    ];
  }
  
  $result = $page -> SetPage ( 'admin', $arParams );
