<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Contracts\Broadcasting\ShouldBroadcastNow;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

//235
class NewMessage implements ShouldBroadcastNow
{
  use Dispatchable, InteractsWithSockets, SerializesModels;

  //    236-1
  public $body;
  public $created_at;

  /**
   * Create a new event instance.
   *
   * @return void
   */
  //    236
  public function __construct($body, $created_at)
  {
    //236-2
    $this->body = $body;
    $this->created_at = $created_at;
  }

  /**
   * Get the channels the event should broadcast on.
   *
   * @return \Illuminate\Broadcasting\Channel|array
   */
  public function broadcastOn()
  {
    //    237
    return new Channel('messages');
  }

  //  238
  public function broadcastWith()
  {
    return [
      "body"       => $this->body,
      "created_at" => $this->created_at
    ];
  }
}
