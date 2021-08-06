<?php
  
  namespace App\Http\Controllers\Api;
  
  use App\Http\Controllers\Controller;
  use App\Models\Article;
  use Illuminate\Http\Request;
  
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
        ])->setStatusCode ( 404, 'Post Not Found');
      }
      return response () -> json ( $article );
      
    }
  }
