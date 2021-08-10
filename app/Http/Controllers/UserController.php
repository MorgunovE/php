<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

//192-1
use Illuminate\Support\Str;

class UserController extends Controller
{
  //  189
  public function register(Request $request)
  {
    User::create([
      "username" => $request->username,
      'name'     => $request->name,
      'login'    => $request->login,
      'email'    => $request->email,
      "password" => Hash::make($request->password),
    ]);
    return response()->json([
      "status" => true,
    ]);
  }

  //  192
  public function login(Request $request)
  {
//    dd($request->all());
    $user = User::where('name', $request->name)->first();
    if(is_null($user)) {
      return response()->json([
        "status" => false
      ], 401);
    }
    if(Hash::check($request->password, $user->password)) {
      $token = Str::random(150);
      //      dd($token);
      $user->token = $token;
      $user->save();
      return response()->json([
        "status" => true,
        "token"  => $token
      ]);
    } else {
      return response()->json([
        'status' => false
      ], 401);
    };

  }
}
