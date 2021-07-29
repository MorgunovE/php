<?php
require_once 'CCurrency.php';
$usd_ID = 145;
$rateUSD = new CCurrency();
$result = $rateUSD->GetRates($rateUSD->startdate, $rateUSD->today, $usd_ID);
$json = json_encode($result);

include('header.php');
?>
    <!-- HTML -->
    <h1>USD from 01.01.2021</h1>
    <div id='chartdiv'></div>
    <table border='1'>
        <tr>
            <th>Date</th>
            <th>Rate</th>
        </tr>
			<? foreach ($result as $res) { ?>
          <tr>
              <td><?= $res['date'] ?></td>
              <td><?= $res['value'] ?></td>
          </tr>
				<?
			} ?>
    </table>
<?php
/////////////////////////////
//require_once ('forma.php');
////////////////////////////
//step
//1.add CModel in models
//2.add CController.php in controllers
//3. import CModel in CController
//4. add CView in view
//5. import CView in CController
//6. add view_mainpage in views
//7. requre in index.php
//require_once ( 'views/CView.php' );
//require_once ( 'controllers/CController.php' );
//8. add function in  CView
//9. add header and footer php in views and cut from view_mainpage
//10.
//$view = new CView();
//$contr = new CController();

//$pageHeader = $view -> GetHeader ();
//$pageFooter = $view -> GetFooter ();
//$pageBody = $view -> ViewMainPage ();

//include ( $pageHeader );
//var_dump($pageBody);
//include ( $pageFooter );
//11. import controller in cview
/////////////////////////////
//function pr ( $n )
//{
//	echo '<pre>';
//	print_r ( $n );
//	echo '</pre>';
//}
//
//function getData($data) {
//	$dataSite = [];
//	$dataSite[] = $data;
//	return $dataSite;
//}
//function getDataByOrder ( $text, $limit1, $limit2, $order )
//{
//	for ($i = 1; $i <= $order; $i++) {
//		$pos = strpos($text, $limit1);
//		if($pos === false) {
//			return false;
//		}else{
//			$pos += strlen($limit1);
//			$text = substr($text, $pos);
//			if($i == $order) {
//				$pts = strpos($text, $limit2);
//				if($pts === false) return false;
//				else $text = substr($text, 0, $pos);
//			}
//		}
//	}
//}
//
//$arr_sites = [
////	'https://www.yandex.by',
////	'https://www.tut.by',
////	'https://www.brainforce.by',
////	'https://www.brainforce.pro',
//	'https://msk.vevanta.com',
//	'https://modern.vevanta.site',
////	'https://www.onliner.by',
////	'https://www.php.net',
//	'https://vevanta.com',
//	'https://vevanta.ru',
//];
////pr($arr_sites);
//$cookies = "cookie-" . microtime ( true ) . ".txt";
//
//foreach ( $arr_sites as $site ) {
//	$page = file_get_contents ( $site);
//	$content = $page;
//	preg_match('#<title>(.*?)</title>#su', $content, $matches);
//	$title = $matches[1];
//	$data=getData($title);
////	$title = getDataByOrder($content,'<title>', '</title>', 1);
//	$filename = './site.txt';
//
//	file_put_contents($filename, $data);
//	echo $site . " - " . $title. "<br />";
//}
//////////////////////////////////////////

//function pr ( $n )
//{
//	echo '<pre>';
//	print_r ( $n );
//	echo '</pre>';
//}
//
//function mb_strrev ( $str )
//{
//	$r = '';
//	for ( $i = mb_strlen ( $str ) ; $i >= 0 ; $i-- ) {
//		$r .= mb_substr ( $str, $i, 1 );
//	}
//	return $r;
//}
//
//function isPoly ( $n )
//{
//	$result = 0;
//	$n = trim ( $n );
//	$symbols = [ ' ', '.', ':', ',', '%', '$', '#', '@', '!', '^', '&', '*' ];
//	$n = mb_strtolower ( str_replace ( $symbols, '', $n ) );
//	$revers = mb_strrev ( $n );
//
//	if ( $n == $revers ) {
//		$result = 1;
//	}
////	pr ( $n );
////	pr ( $revers );
////	pr ( "------" );
//	return $result;
//}
//
//$letPhrases = [
//	"Тут как тут",
//
//	"Коту тащат уток",
//
//	"15.01.2002 10:51",
//
//	"Я разуму уму заря",
//
//	"Искать такси",
//
//	"Дивен мне вид",
//
//	'Дивен вид',
//
//	'Vне вид',
//];
//foreach ( $letPhrases as $phrase ) {
//	$result = 'Word is not palindrome';
//	$res = isPoly ( $phrase );
//	if ( $res ) $result = "Word is palindrome";
//	pr ( $phrase . " - " . $result );
//}
//pr ( $letPhrases );
//////////////////////////////////////////////
//$url = "https://yandex.by";
//$cont = file_get_contents($url);
//print_r ( $cont);

//$curl = curl_init();
//curl_setopt($curl, CURLOPT_URL, $url);
//curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//$res = curl_exec($curl);
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