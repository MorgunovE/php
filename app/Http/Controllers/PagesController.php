<?php
  
  namespace App\Http\Controllers;
  
  use App\Models\Article;
  use App\Models\Comment;
  use App\Models\Todo;
  use Illuminate\Http\Request;
  use Illuminate\Http\Str;
  use Illuminate\Support\Facades\Auth;
  
  
  class PagesController extends Controller
  {
//  28
    public function helloPage ()
    {
      $skills = [ 'HTML5', 'CSS3', 'VUE.JS', 'PHP' ];
      $name = 'Pavel';
      
      $res = [
        'name' => $name,
        'skills' => $skills,
      ];
      if ( 1 == 1 ) {
        $res[ 'test' ] = "Str::random(10)";
      }
      return view ( 'hello', $res );
    }
    
    public function todos ()
    {
//      39
//      $todo = new Todo();
//
//      $todo -> title = "Read book";
//      $todo -> note = "read from 99 page";
//
//      $todo = $todo -> save ();
//      40
//      $todo = Todo ::create ( [
//        "title" => 'Read book',
//        "note" => 'read from 99 page'
//      ] );

//      45
//      $todo = Todo::find(1);
////      dd($todo);
//      if($todo){
//        $todo->status = 1;
//        $todo->save ();
//      }

//      46
//      $todo = Todo ::find ( 8 );
//      if ( $todo ) {
//        $todo -> delete ();
//      }


//      43
      $todos = Todo ::all ();

//      dd($todo);
//      dd($todos);

//      43-1
      return view ( 'todos', [
        "todos" => $todos
      ] );
    }

//    49
    public function todosDone ()
    {
      $todos = Todo ::where ( 'status', 1 ) -> get ();
//      $todos = Todo ::where ( 'status', 1 ) -> first ();
      return view ( 'todos_done', [
        'todos' => $todos
      ] );
    }
    
    public function todosNotDone ()
    {
      $todos = Todo ::where ( 'status', 0 ) -> get ();
//      $todos = Todo ::where ( 'status', 0 )-> where('title', 'Read book') -> get ();
      return view ( 'todos_not_done', [
        'todos' => $todos
      ] );
    }

//    54
    public function blogPage ()
    {
      $articles = Article ::all ();
      return view ( 'blog', [
//        58
        'articles' => $articles
      ] );
    }

//    61
    public function articlePage ( $id )
    {
//      dd ( $id );
      $article = Article ::find ( $id );
      if ( !$article ) {
        return abort ( 404 );
      }
//      66
//      $comments = Comment ::where ( 'article_id', $id )->get();
      return view ( 'article', [
        'article' => $article,
//        66-1
//        'comments' => $comments,
      ] );
    }

//    84
    public function articleUpdatePage ( $id )
    {
      $article = Article ::find ( $id );
      if ( !$article ) {
        return abort ( 404 );
      }
      return view ( 'article_update', [
        'article' => $article,
      ] );
    }

//    111
    public function test ()
    {
//      114
      return view ( 'test', [
        "user" => Auth ::user ()
      ] );
    }

//  119
    public function admin ()
    {
//      122
      return view ( 'admin' );
    }
    public function art ()
    {
      return view ( 'art' );
    }
  }
