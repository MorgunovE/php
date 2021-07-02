<?php

namespace App\Cars;

require_once "App/Cars/CarReview.php";

class CarDetails extends CarReview
{
	public function getTax()
	{
		if($this->hp > 200){
			return 400;
		}elseif($this->hp < 200 && $this->hp > 150){
			return 200;
		}elseif($this->hp < 150 && $this->hp > 50){
			return 50;
		}
	}
}