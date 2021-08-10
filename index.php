<!DOCTYPE html>
<html lang='ru'>
<head>
	<meta charset='UTF-8'>
	<title>Lesson 19</title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
	<link rel='stylesheet' href='css/style.css'>
</head>
<body>

	<div class='container'>
	<h3>Ajax</h3>
	<hr>
	<form action='#'>
		<input type='text' class='form-control' required placeholder='name'><br>
		<button type='submit' class='btn btn-success'>Send</button>
		<button type='button' class='btn btn-success'>Take section</button>
	</form>
    <div id="result"></div>
    <section id="section-1">
      <h4 class="text-center"> Section 1</h4>
    </section>
    <section id="section-2">
      <h4 class="text-center"> Section 2</h4>
    </section>
    <div id="sections"></div>
</div>


	<script src='http://code.jquery.com/jquery-2.2.4.min.js'></script>
	<script src='js/main.js'></script>


</body>
</html>
