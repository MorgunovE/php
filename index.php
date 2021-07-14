<?php
$url = "https://yandex.by";
//$cont = file_get_contents($url);
//print_r ( $cont);

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$res = curl_exec($curl);
//print_r ( $res);

//preg_match('#<title>(.*?)</title>#su', $res, $matches);
//$title = $matches[1];
//print_r ( $title);

/////////////////////////////////////////////////////////////
//
//function pr ( $n )
//{
//	echo "<pre>";
//	print_r ( $n );
//	echo "</pre>";
//}
//
//function setMonth ( $days, $dayName )
//{
//	if ( $days >= 28 && $days <= 31 ) {
//		$arrDays = [ 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday', ];
//		$start = 0;
//		for ( $j = 0 ; $j < count ( $arrDays ) ; $j++ ) {
//			if ( $dayName == $arrDays[ $j ] ) {
//				$start = $j;
//			}
//		}
//		if ( $start != 0 ) {
//			for ( $i = $start ; $i < $days + $start ; $i++ ) {
//				$day = $i % 7;
//				$arrMonth[] = $arrDays[ $day ];
//			}
//			return $arrMonth;
//		} else {
//			die( 'Incorrect dayName' );
//		}
//	} else {
//		die( "Incorrect days" );
//	}
//}
//
//$arRes = setMonth ( 31, 'Friday' );
//
//pr ( $arRes );