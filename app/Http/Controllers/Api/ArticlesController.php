<?php
  
  namespace App\Http\Controllers\Api;
  
  use App\Http\Controllers\Controller;
  use App\Models\Article;
  use Illuminate\Http\Request;

//  148
  use Validator;
  
  class ArticlesController extends Controller
  {
    public function showArticles ()
    {
      //      return Article::all ();
//      140
      $articles = Article ::all ();
//      return response () -> json ( $articles, 201 );
      return response () -> json ( $articles );
    }

//    142
    public function showArticle ( $id )
    {
      $article = Article ::find ( $id );
      if ( !$article ) {
        return response () -> json ( [
          "status" => false,
          "message" => "Page not found",
        ] ) -> setStatusCode ( 404, 'Post Not Found' );
      }
      return response () -> json ( $article );
      
    }

//    147
    public function storeArticle ( Request $request )
    {
//      dd ( $request);
//      dd ( $request->title);
      $request_data = $request -> only ( [ 'title', 'content', 'body' ] );
//      dd ( $request_data);
//      148
      $validator = Validator ::make ( $request_data, [
        'title' => [ 'required', 'string' ],
        'content' => [ 'required', 'string' ],
        'body' => [ 'required', 'string' ],
      ] );
      if ( $validator -> fails () ) {
        return response () ->json ( [
          "status"=>false,
          "errors" => $validator->messages()
        ])->setStatusCode ( 422);
      }
      
      $article = Article ::create ( [
        'title' => $request -> title,
        'content' => $request -> body,
      ] );
      return response () -> json ( [
        "status" => true,
        "article" => $article
      ] ) -> setStatusCode ( 201, "Article post created" );
    }
  }
