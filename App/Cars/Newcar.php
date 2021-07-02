<?php

namespace App\Cars;

//require_once "TestClass.php";
require_once "App/Cars/CarDetails.php";

class Newcar extends CarDetails
{
	protected $model;
	protected $hp;
	private $year;

	public static $message;

	public function __construct($model, $year, $hp)
	{
		$this->year=$year;
		$this->model=$model;
		$this->hp=$hp;
	}
	public function info()
	{
		return [
			"model" => $this->model,
			"year" => $this->year,
			"hp" => $this->hp,
			"price" => self::getPrice($this->model,$this->year, $this->hp),
			"tax" => $this->getTax(),
			"review" => $this->reviewText(),
		];
	}
	public function show()
	{
//		$price = self::getPrice($this->model,$this->year, $this->hp);
		$price=123;

		echo "<div style='padding: 20px; background: azure;'>
                <h2>Model: $this->model</h2>
                <p>Horsepower: $this->hp</p>
                <p>Year: $this->year</p>
                <p>Price ~ $price$</p>
            </div>";
	}
//	public static function getPrice($model, $year, $hp)
//	{
//		$price = 0;
//
//		if($model == "Honda"){
//			$price += 4000;
//		}elseif($model == "Nissan"){
//			$price += 3500;
//		}
//
//		if($hp > 200){
//			$price -= 100;
//		}elseif($hp > 150 && $hp < 200){
//			$price -= 300;
//		}elseif($hp > 100 && $hp < 150){
//			$price -= 600;
//		}
//
//		if($year > 2015){
//			$price += 300;
//		}elseif($year > 2010 && $year < 2015){
//			$price += 100;
//		}elseif($year > 2005 && $year < 2010){
//			$price += 30;
//		}
//
//		return $price;
//
//	}

//	public static function staticMethod()
//	{
//		return "Some text by staticMethod";
//	}

//	public static function showMessage()
//	{
//		return self::$message;
//	}
}

//class Newcar extends CarDetails
//{
//	protected $model;
//	protected $hp;
//	private $year;
//
//	public static $message;
//
//	public function __construct($model, $year, $hp)
//	{
//		$this->year=$year;
//		$this->model=$model;
//		$this->hp=$hp;
//	}
//	public function info()
//	{
//		return [
//			"model" => $this->model,
//			"year" => $this->year,
//			"hp" => $this->hp,
//			"price" => self::getPrice($this->model,$this->year, $this->hp),
//			"tax" => $this->getTax(),
//			"review" => $this->reviewText(),
//		];
//	}
//	public function show()
//	{
//		$price = self::getPrice($this->model,$this->year, $this->hp);
//
//		echo "<div style='padding: 20px; background: azure;'>
//                <h2>Model: $this->model</h2>
//                <p>Horsepower: $this->hp</p>
//                <p>Year: $this->year</p>
//                <p>Price ~ $price$</p>
//            </div>";
//	}
//	public static function getPrice($model, $year, $hp)
//	{
//		$price = 0;
//
//		if($model == "Honda"){
//			$price += 4000;
//		}elseif($model == "Nissan"){
//			$price += 3500;
//		}
//
//		if($hp > 200){
//			$price -= 100;
//		}elseif($hp > 150 && $hp < 200){
//			$price -= 300;
//		}elseif($hp > 100 && $hp < 150){
//			$price -= 600;
//		}
//
//		if($year > 2015){
//			$price += 300;
//		}elseif($year > 2010 && $year < 2015){
//			$price += 100;
//		}elseif($year > 2005 && $year < 2010){
//			$price += 30;
//		}
//
//		return $price;
//
//	}
//
////	public static function staticMethod()
////	{
////		return "Some text by staticMethod";
////	}
//
//	public static function showMessage()
//	{
//		return self::$message;
//	}
//}