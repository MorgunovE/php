<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessagesController extends Controller
{
  //    223
  public function index()
  {
    return response()->json(Message::all());
  }

  //223-1
  public function store(Request $request)
  {
    $message = Message::create([
      "body" => $request->body,
    ]);
    return response()->json([
      "status"  => true,
      "message" => $message
    ]);
  }
}
