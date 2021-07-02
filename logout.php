<?php
session_start();
unset($_SESSION["name"]);
$_SESSION["name"] = NULL;
//setcookie("name", NULL);
header("Location: index.php");