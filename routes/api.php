<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ArticlesController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
//  134
Route::get('/articles', [ArticlesController::class, "showArticles"] );
//141
Route ::get ( '/articles/{id}', [ ArticlesController::class, 'showArticle' ] );
//146
Route ::post ( '/articles', [ ArticlesController::class, 'storeArticle' ] );
//152
Route::put('/articles/{id}', [ArticlesController::class, 'putArticle']);
//154
Route::patch('/articles/{id}', [ArticlesController::class, 'patchArticle']);
//163
Route::delete('/articles/{id}', [ArticlesController::class, 'deleteArticle']);
//168
//Route::resource('art', \App\Http\Controllers\ArtController::class);
//174
Route::apiResource('art', \App\Http\Controllers\ArtController::class);
