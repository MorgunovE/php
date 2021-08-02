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
    
    public function GetOptions ($option_name)
    {
      $data = new CModel();
      $result = $data -> GetOptions ($option_name);
      return $result;
    }
//    47
    public function SetOptions ($option_name, $option_value)
    {
      $data = new CModel();
      $result = $data -> SetOptions ($option_name, $option_value);
      return $result;
    }
    
    public function GetMenu ()
    {
      //		19
      $data = new CModel();
      $result = $data -> GetMenu ();
      return $result;
    }
    
    public function GetPhone ()
    {
      $data = new CModel();
      $result = $data -> GetPhone ();
      return $result;
    }
    
    public function GetContacts ()
    {
      $data = new CModel();
      $result = $data -> GetContacts ();
      return $result;
    }
//    44
    public function GetAllOptions ()
    {
      $data = new CModel();
      $result = $data -> GetAllOptions ();
      return $result;
    }
    
    public function SetPage ( $pagetype, $arParams )
    {
//      37
      if ( $pagetype == 'single-news' ) {
        $arResult = $this -> GetData ( $pagetype, $arParams );
        include ( '../view/single-news.php' );
      }
      if ( $pagetype == 'news' ) {
        //      21
        $arResult = $this -> GetData ( $pagetype, $arParams );
//          pr($arResult);
//          25
        include ( '../view/news.php' );
      }
//        32
      if ( $pagetype == 'main' ) {
//          $arResult = $this->GetData($pagetype, $arParams);
        include ( 'view/main.php' );
      }
      if ( $pagetype == 'admin' ) {
        include ( 'view/admin.php' );
      }
//		11
      if ( $pagetype == 'contacts' ) {
        $arResult = $this -> GetData ( $pagetype, $arParams );
//            pr($arResult);
//			16
        include ( '../view/contact.php' );
      }
      return $arResult;
    }
  }