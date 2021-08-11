<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
      //      "body" => $request->body,
      "body" => Str::random(10),
    ]);
    //    239
    event(new NewMessage($message->body, $message->created_at));
    return response()->json([
      "status"  => true,
      "message" => $message
    ]);
  }
}
