<?php
  
  namespace App\Http\Controllers\Api;
  
  use App\Http\Controllers\Controller;
  use App\Models\Article;
  use Illuminate\Http\Request;
  
  class ArticlesController extends Controller
  {
    public function showArticles ()
    {
      return Article::all ();
    }
  }
