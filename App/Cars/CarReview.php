<?php

namespace App\Cars;

class CarReview
{
	public function reviewText()
	{
		if($this->model == "Honda")
		{
			return "Good car";
		}elseif($this->model == "Lada")
		{
			return "Bad car";
		}
	}
}