<?php
  
  use Illuminate\Support\Facades\Route;
//  29-1
  use App\Http\Controllers\PagesController;
  /*
  |--------------------------------------------------------------------------
  | Web Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register web routes for your application. These
  | routes are loaded by the RouteServiceProvider within a group which
  | contains the "web" middleware group. Now create something great!
  |
  */
  
//  Route ::get ( '/', function () {
//    return view ( 'welcome' );
//  } );
//    9

//    Route ::get ( '/hello', function () {
//        return '<h1>Hello, Pasha!</h1>';
//    } );

//    Route ::get ( '/', function () {
//        return '<h1>Home Page!</h1>';
//    } );

//    Route ::get ( '/post/{id}', function ( $id ) {
//        return '<h1>ID - ' . $id. '</h1>';
//    } );

//13
  
//  Route ::get ( '/hello', function () {
////    21
//    return view ( 'hello', [
//      "name" => "Pavel",
//      "test" => "Content",
////      23
//      "skills" => ["HTML5", "CSS3", "VUE.JS", "PHP"],
//    ] );
//  } );
//  29
  Route ::get ( '/hello', [PagesController::class, "helloPage"] );
  Route ::get ( '/todos', [PagesController::class, "todos"] );
//  Route ::get ( '/test', [ PagesController::class, 'testPage' ] );
