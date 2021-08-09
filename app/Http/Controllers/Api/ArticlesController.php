<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

//  148
use Validator;

class ArticlesController extends Controller
{
  public function showArticles()
  {
    //      return Article::all ();
    //      140
    $articles = Article::all();
    //      return response () -> json ( $articles, 201 );
    return response()->json($articles);
  }

  //    142
  public function showArticle( $id )
  {
    $article = Article::find($id);
    if( !$article ) {
      return response()->json([
        "status" => false,
        "message" => "Page not found",
      ])->setStatusCode(404, 'Post Not Found');
    }
    return response()->json($article);

  }

  //    147
  public function storeArticle( Request $request )
  {
    //      dd ( $request);
    //      dd ( $request->title);
    $request_data = $request->only([ 'title', 'content', 'body' ]);
    //      dd ( $request_data);
    //      148
    $validator = Validator::make($request_data, [
      'title' => [ 'required', 'string' ],
      'content' => [ 'required', 'string' ],
      'body' => [ 'required', 'string' ],
    ]);
    if( $validator->fails() ) {
      return response()->json([
        "status" => false,
        "errors" => $validator->messages()
      ])->setStatusCode(422);
    }

    $article = Article::create([
      'title' => $request->title,
      'content' => $request->body,
    ]);
    return response()->json([
      "status" => true,
      "article" => $article
    ])->setStatusCode(201, "Article post created");
  }

  //    153
  public function putArticle( $id, Request $request )
  {
    $request_data = $request->only([ 'title', 'content', 'body' ]);
    $validator = Validator::make($request_data, [
      'title' => [ 'required', 'string' ],
      'content' => [ 'required', 'string' ],
      'body' => [ 'required', 'string' ],
    ]);
    if( $validator->fails() ) {
      return response()->json([
        'status' => false,
        'errors' => $validator->messages()
      ])->setStatusCode(422);
    }
    $article = Article::find($id);
    if( !$article ) {
      return response()->json([
        'status' => false,
        'message' => "Article Not Found"
      ])->setStatusCode(404, "Article Not Found");
    }
    $article->title = $request_data[ 'title' ];
    $article->content = $request_data[ 'content' ];
    $article->body = $request_data[ 'body' ];
    $article->save();
    return response()->json([
      'status' => true,
      'message' => 'Article updated'
    ])->setStatusCode(200, 'Article updated');
  }

  //    155
  public function patchArticle( $id, Request $request )
  {
    //    dd ( $request);
    $request_data = $request->only([ 'title', 'content', 'body' ]);
    //      dd ( $request_data);
    if( count($request_data) === 0 ) {
      return response()->json([
        'status' => false,
        'Message' => "All fields is empty"
      ])->setStatusCode(422, "All fields is empty");
    }
    $rules_const = [
      'title' => [ 'required', 'string' ],
      'content' => [ 'required', 'string' ],
      'body' => [ 'required', 'string' ],
    ];
    $rules = [];
    foreach( $request_data as $key => $data ) {
      $rules[ $key ] = $rules_const[ $key ];
    }
    //      dd ( $rules);
    $validator = Validator::make($request_data, $rules);
    if( $validator->fails() ) {
      return response()->json([
        'status' => false,
        'errors' => $validator->messages()
      ])->setStatusCode(422);
    }
    $article = Article::find($id);
    if( !$article ) {
      return response()->json([
        'status' => false,
        'message' => 'Article Not Found'
      ])->setStatusCode(404, 'Article Not Found');
    }
    foreach( $request_data as $key => $data ) {
      $article->$key = $data;
    }
    $article->save();
    return response()->json([
      'status' => true,
      'message' => 'Article updated'
    ])->setStatusCode(200, 'Article updated');
  }

  //    164
  public function deleteArticle( $id )
  {
    $article = Article::find($id);
    if( !$article ) {
      return response()->json([
        'status' => false,
        'message' => 'Article Not Found'
      ])->setStatusCode(404, 'Article Not Found');
    }
    $article->delete();
    return response()->json([
      'status' => true,
      'message' => 'Article deleted'
    ])->setStatusCode(200, 'Article deleted');
  }
}
