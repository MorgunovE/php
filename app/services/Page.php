<?php


namespace App\services;
//<!--14 part
//add class Page in services
//-->

class Page
{
//	14-1 part of pages
 public static function part($part_name) {
	 //	14-2 view to client part of pages
	 require_once 'views/components/' . $part_name . '.php';
 }
}