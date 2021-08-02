<?php

//6
class Cmodel
{
  public $link;

  public function __construct()
  {
    $connectData = [
      'dbserver' => 'localhost',
      'dbuser' => 'root',
      'dbname' => 'phpU',
      'dbpass' => '',
    ];
    $this->link = mysqli_connect($connectData['dbserver'], $connectData['dbuser'], $connectData['dbpass'], $connectData['dbname']);
    if (mysqli_connect_errno()) {
      echo 'Connect error: ' . mysqli_connect_error();
    }
  }

//7
  public function GetData($type, $arData)
  {
//    38
    if ($type == 'single-news') {
      $sql = 'SELECT * FROM news WHERE id = '. $arData['news_id'];
      $res = mysqli_query($this->link, $sql);
      if ($arRes = mysqli_fetch_assoc($res))
        $arResult = $arRes;
    }
    if ($type == 'news') {
//      28
//      30
      $sql = 'SELECT * FROM news ORDER BY ' . $arData['ORDERBY'] . ' ' . $arData['ORDER'] . ' LIMIT 0,' . $arData['LIMIT'];
      $res = mysqli_query($this->link, $sql);
      while ($arRes = mysqli_fetch_assoc($res))
        $arResult[] = $arRes;
    }
//		12
    if ($type == 'contacts') {
      $sql = 'SELECT * FROM contacts LIMIT 0,2';
      $res = mysqli_query($this->link, $sql);
      while ($arRes = mysqli_fetch_assoc($res))
        $arResult[] = $arRes;
    }
    return $arResult;
  }

  public function GetMenu()
  {
//    18
//      22
    $sql = 'SELECT * FROM menu ORDER BY sort ASC';
    $res = mysqli_query($this->link, $sql);
    while ($arRes = mysqli_fetch_assoc($res))
      $arMenu[] = $arRes;
//        pr($arMenu);
    return $arMenu;
  }

  public function GetOptions($option_name) {
    //    40
    $sql = 'SELECT * FROM options WHERE name = "'.$option_name .'"';
    $res = mysqli_query($this->link, $sql);
    if ($arRes = mysqli_fetch_assoc($res))
      $option_value = $arRes['value'];
    return $option_value;
  }
//  48
  public function SetOptions($option_name, $option_value) {
    $sql = "UPDATE options SET value = '$option_value' WHERE name = '$option_name'";
    $res = mysqli_query($this->link, $sql);
  }
  public function GetPhone()
  {
//    $sql = 'SELECT phone FROM contacts';
//    $res = mysqli_query($this->link, $sql);
//    while ($arRes = mysqli_fetch_assoc($res))
//      $arPhone[] = $arRes;
//    return $arPhone;
    return $this->GetOptions('contact_phone');
  }

  public function GetContacts()
  {
    $sql = 'SELECT * FROM contacts LIMIT 0,2';
    $res = mysqli_query($this->link, $sql);
    while ($arRes = mysqli_fetch_assoc($res))
      $arResult[] = $arRes;
    return $arResult;
  }
//  43
  public function GetAllOptions()
    {
      $sql = 'SELECT * FROM options';
      $res = mysqli_query($this->link, $sql);
      while ($arRes = mysqli_fetch_assoc($res))
        $arResult[] = $arRes;
      return $arResult;
    }

  public function SetData()
  {
  }
}