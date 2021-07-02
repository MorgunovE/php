<?php

namespace App\Cars;

class Car {
	private $model;
	private $horsepower;
	private $year;
	private $color;

	public function __construct($model, $horsepower, $year, $color)
	{
		$this->model = $model;
		$this->horsepower = $horsepower;
		$this->year = $year;
		$this->color = $color;
	}

	public function show() {
		$tax = $this->tax();
		echo "<div style='padding: 20px; background: azure; font-family: Roboto;'>
                <h2>Model: $this->model</h2>
                <p>Horsepower: $this->horsepower</p>
                <p>Year: $this->year</p>
                <p>Tax: $tax$</p>
                <p>Color:<b><span style='color: $this->color;'> $this->color</span></b></p>
            </div>";
	}

	private function tax() {
		if($this->horsepower <=150){
			return $this->horsepower * 15 / 3;
		}elseif($this->horsepower <=250){
			return $this->horsepower * 30 / 3;
		}elseif($this->horsepower >250){
			return $this->horsepower * 50 / 3;
		}
	}
}