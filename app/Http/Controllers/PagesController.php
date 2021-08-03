<?php
  
  namespace App\Http\Controllers;
  
  use Illuminate\Http\Request;
  
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
        $res[ 'test' ] = "test";
      }
      return view ( 'hello', $res );
    }
    
    public function todos ()
    {
      return view ( 'todos' );
    }
    
  }
