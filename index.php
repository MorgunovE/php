<!--First set htaccess
get parameter q
-->
<!--set composer and autoload
composer -v
composer.json
register class in App\\ app/
composer dump-autoload -o
-->

<!--2 part add vendor in index php-->

<!--3 part routing-->
<!--dir router-->
<!--routes php-->
<!--routes list-->

<!--4 part services-->
<!--dir app/services-->
<!--Router php-->

<!--5 part views-->
<!--dir views/pages-->
<!--pages for routes-->

<!--6 part in Routes-->

<!--7 part add page login in views/pages
and connect to router php
7-2 if pages dosent exist in Routes php
7-3 add errors page in view errors
7-4 find in Routes php page for client from views/errors  path connect index php
-->
<!--8 part down boostrap
dir assets
copy there js and css
8-1 link css in login next head
-->
<!--9 part add nav bar form https://getbootstrap.com/docs/5.0/components/
in login next navbar
-->
<!--10 part change navbar with boostrap-->
<!--11 part add form in login-->
<!--12 change 404 -->
<!--13 part add dir components in views
add head .php page
add navbar .php page
13-1 add in login and 404 navbar and head
-->
<!--14 part
add class Page in services
14-3 add class Page to login
-->
<!--15 part add pages register php
15-1 add page to routes php
15-2 change register with boostrap
-->
<!--16 part change navbar-->
<!--17 part add home page in router php
17-1 change home with boostrap
-->
<!--18 part add db in phpmyadmin
18-1 add readmin php from https://redbeanphp.com/
18-2 down from https://redbeanphp.com/index.php?p=/download
18-3 add dir libs
18-4 puts rb there
-->
<!--19 part add class Add in services-->
<!--20 part add dir config
20-1 add app php
-->
<!--21 add config app in App php-->
<!--22 init db method that init db in App php
22-1 add file db in config
22-3 method bd in App php
-->
<!--23 add method start from App php in index
23-3 add \ to R class in App php for global
-->
<!--24 add method post in register php
24-1 add method in router for register form
24-2 add method(controllers) for post in Router php
-->
<!--25 part add dir controllers for method in router php
 25-1 add class Auth
 25-3 change for class in Router php
 25-4 add use for class Auth in router php
 25-5 put parameters in method post in Router php
 25-13 take data in Auth php from method post in Router php
-->
<!--26 part add name in form register php-->
<!--27 part change post method in Router php
27-1 add parameters for action in router php
27-2 add if in Router php in enable method
27-5 add files in Auth php from Router php
-->
<!--28 part add dir upload/avatars for files from Auth php
28-1 add function upload for files in Auth php
-->
<!--29 part add method redirect in Router php
29-3 add files in view/error 500
29-4 add class and method from Router in Auth php
-->
<!--30 part add method in Router php-->
<!--31 part add redirect in Auth php
31-1 add login method in Auth
-->
<!--32 part add profile and admin page in views/pages
32-1 redirect in Auth to profile
32-3 add profile and admin page in router
-->
<!--33 part add if in profile page-->
<!--34 part change login boostrap
34-6 add route for login in routes php
-->
<!--35 add in navbar if session-->
<!--36 part add session in index-->
<!--part 37 add if session redirect in login to profiles-->
<!--part 38 add router logout in routes
38-1 add method logout in Auth php
38-4 add form action in navbar for Auth
-->
<!--39 part add admin page in routes-->

<?php
//<!--36 part add session in index-->
session_start ();
//<!--23-1 add method start from App php in index-->
use App\services\App;
//2 part
require_once __DIR__ . "/vendor/autoload.php";
//<!--23-2 add method start from App php in index-->
App::start ();
//4-3 add router php
require_once __DIR__ . "/router/routes.php";

