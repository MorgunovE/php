<h1>Hello, <?php
  session_start();
  echo $_SESSION["name"];?></h1>
<a href="logout.php">Exit</a>