<?php
$date_begin = date ( 'Y-m-d' );
function pr ( $n )
{
	echo '<pre>';
	print_r ( $n );
	echo '</pre>';
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mail</title>
</head>
<body>
<h1>Mail</h1>
<?php
if ( isset( $_POST[ 'date_begin' ] ) ) {
	pr ( $_POST );
	echo "<h3> Send another message </h3>";
}
?>
<form autocomplete="on" method="post" action="forma.php">
    <h2>Start to New Year: <span id="days"></span></h2>
    <label for="date_begin">Start</label>
    <hr/>
    <input type="date" id="date_begin" name='date_begin' value="<?= $date_begin; ?>" min="<?= $date_begin; ?>"
           max="2021-12-31">
    <hr/>
    <hr/>
    <label for='city'>City</label>
    <hr/>
    <select name="city" id="city">
        <option value="Tyumen">Tyumen</option>
        <option value="Moskow">Moskow</option>
        <option value="EKB">EKB</option>
        <option value="Surgut">Surgut</option>
    </select>
    <hr/>
    <hr/>
    <label for='present'>Your present</label>
    <hr/>
    <input type="file" id="present" name='present'>
    <hr/>
    <hr/>
    <input type="submit" name='submit' value="Submit request">
</form>
</body>
</html>