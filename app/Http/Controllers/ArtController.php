<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Comment;
use Illuminate\Http\Request;

//178
use App\Http\Resources\Article as ArticleResource;

//181
use App\Http\Resources\ArticleCollection;

class ArtController extends Controller
{
  //  175-1
  private $articlesList = [];

  //  199
  public function __construct()
  {
    $this->middleware('bearer-auth')->only(['store']);
  }

  /**
   * Display a listing of the resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function index()
  {
    //    175
    //    $articles = Article::all();
    return response()->json([
      //      181-1
      'articles' => new ArticleCollection(Article::all()),
    ]);
    //    foreach($articles as $article) {
    //      $comments = $article->comments();
    //      $commentsList = [];
    //      foreach($comments as $comment) {
    //        $commentsList[] = $comment->body;
    //      }
    //      $this->articlesList[] = [
    //        "id"       => $article->id,
    //        "title"    => $article->title,
    //        "content"  => $article->body,
    //        "body"     => $article->body,
    //        "comments" => $commentsList
    //      ];
    //    }
    //    return $this->articlesList;
  }

  /**
   * Show the form for creating a new resource.
   *
   * @return \Illuminate\Http\Response
   */
  public function create()
  {
    //
  }

  /**
   * Store a newly created resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @return \Illuminate\Http\Response
   */
  public function store(Request $request)
  {
    //    170
    $article = Article::create([
      'title'   => $request->title,
      'body'    => $request->body,
      'content' => $request->body,
    ]);
    return $article;
  }

  /**
   * Display the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function show($id)
  {
    //    171
    //    return Article::find($id);
    //    179
    //    $article = Article::find($id);
    //    return new ArticleResource($article);
    return response()->json([
      "article" => new ArticleResource(Article::find($id)),
    ]);
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function edit($id)
  {
    //
  }

  /**
   * Update the specified resource in storage.
   *
   * @param \Illuminate\Http\Request $request
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function update(Request $request, $id)
  {
    //172
    //    return "update " . $id;
    //    dd($request->all());
    $article = Article::find($id);
    $article->title = $request->title;
    $article->save();
    return $article;
  }

  /**
   * Remove the specified resource from storage.
   *
   * @param int $id
   * @return \Illuminate\Http\Response
   */
  public function destroy($id)
  {
    //173
    $article = Article::find($id);
    $article->delete();
    return response()->json([
      "status"  => true,
      "message" => "art deleted"
    ]);
  }
}
