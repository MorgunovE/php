<?php


class CCurrency
{
	public $startdate = '2021-1-1';
	public $today;

	public function __construct()
	{
		$this->today = date('Y-m-d', time());
	}

	public function pr($n)
	{
		echo '<pre>';
		print_r($n);
		echo '</pre>';
	}

	public function GetRates($startdate, $enddate, $Cur_ID)
	{
		$request = 'https://www.nbrb.by/api/exrates/rates/dynamics/' . $Cur_ID . '?startdate=' . $startdate . '&enddate=' . $enddate;

// 1. инициализация
		$ch = curl_init();

// 2. указываем параметры, включая url
		curl_setopt($ch, CURLOPT_URL, $request);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_HEADER, 0);

// 3. получаем HTML в качестве результата
		$output = json_decode(curl_exec($ch));

// 4. закрываем соединение
		curl_close($ch);

		foreach ($output as $rate) {
			$date = explode('T', $rate->Date);
			$arRates[] = [
//				'CURID' => $rate->Cur_ID,
				'date' => $date[0],
				'value' => $rate->Cur_OfficialRate,
			];
		}

		return $arRates;
	}
}