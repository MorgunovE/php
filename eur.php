<?php
require_once 'CCurrency.php';
$euro_ID = 292;
$rateEUR = new CCurrency();
$result = $rateEUR->GetRates($rateEUR->startdate, $rateEUR->today, $euro_ID);
$json = json_encode($result);

include('header.php');
?>
	<!-- HTML -->
	<h1>EURO from 01.01.2021</h1>
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