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
//      43
      $todos = Todo ::all ();

//      dd($todo);
//      dd($todos);

//      43-1
      return view ( 'todos', [
        "todos" => $todos
      ] );
    }
    
  }
