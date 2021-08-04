<?php
  
  namespace App\Http\Controllers;
  
  use App\Models\Todo;
  use Illuminate\Http\Request;
  use Illuminate\Http\Str;
  
  
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
    
  }
