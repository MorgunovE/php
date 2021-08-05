<?php
  
  namespace App\Http\Middleware;
  
  use Closure;
  use Illuminate\Http\Request;

//124
  use Illuminate\Support\Facades\Auth;
  
  class AdminMiddleware
  {
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle ( Request $request, Closure $next )
    {
//      124-1
      if(Auth::user()->group !== 2){
        return abort ( 403);
      }
      
      return $next( $request );
    }
  }
