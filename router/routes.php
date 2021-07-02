<?php

//4-3 from services Routes php
use App\services\Router;
//25-4 add use for class Auth in router php
use App\controllers\Auth;

//3 part routes and name rout
//4-3 method for pages
//<!--17 part add home page in router php-->
Router::page ( '/home', 'home');
//7 part
Router::page ( '/login', 'login');
//15-1 add page register to routes php
Router::page ( '/register', 'register');
//32-3 add profile and admin page in router
Router::page ( '/profile', 'profile');
//<!--39 part add admin page in routes-->
Router::page ( '/admin', 'admin');

//24-1 add method in router for register form
//25-5 change method for class and method from class
//27-1 add parameters for action in router php flags -> true 1 for formdata and 2 for files
Router::post ( '/auth/register', Auth::class, 'register', true, true); // rout, class, method for post
//34-6 add route for login in routes php
Router::post ( '/auth/login', Auth::class, 'login', true);
//<!--part 38 add router logout in routes-->
Router::post ( '/auth/logout', Auth::class, 'logout');



Router::enable ();;
