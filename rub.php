<?php
require_once 'CCurrency.php';
$rub_ID = 298;
$rateRUB = new CCurrency();
$result = $rateRUB->GetRates($rateRUB->startdate, $rateRUB->today, $rub_ID);
$json = json_encode($result);

include('header.php');
?>
<!-- HTML -->
<h1>RUB from 01.01.2021</h1>
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