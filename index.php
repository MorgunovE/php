<?php
session_start ();
use App\services\App;

require_once __DIR__ . "/vendor/autoload.php";
App::start ();
require_once __DIR__ . "/router/routes.php";

