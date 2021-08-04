<?php
  
  use Illuminate\Support\Facades\Route;
//  29-1
  use App\Http\Controllers\PagesController;
//  75
  use App\Http\Controllers\ArticleController;
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
  
  Route ::get ( '/', function () {
    return view ( 'welcome' );
  } );
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
  Route ::get ( '/hello', [PagesController::class, "helloPage"] )->name('hello');
  Route ::get ( '/todos', [PagesController::class, "todos"] )->name('todos');
//  48
  Route ::get ( '/todos/done', [PagesController::class, "todosDone"] );
  Route ::get ( '/todos/not-done', [PagesController::class, "todosNotDone"] );
//  Route ::get ( '/test', [ PagesController::class, 'testPage' ] );

//53
  Route ::get ( '/blog', [ PagesController::class, 'blogPage' ] )->name('blog');
  Route ::get ( '/article/{id}', [ PagesController::class, 'articlePage' ] );
//  72
  Route::post('/article', [
//  75-1
    ArticleController::class, "store"
//    89
  ])->name('article');
//  80
  Route::post('/article/delete', [
    ArticleController::class, "destroy"
  ]);
//  83
  Route ::get ( '/article/{id}/update', [
    PagesController::class, 'articleUpdatePage'
  ] );
//  87
  Route ::post ( '/article/update', [
    ArticleController::class, 'update'
  ] );

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
