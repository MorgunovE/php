<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Article extends JsonResource
{
  /**
   * Transform the resource into an array.
   *
   * @param \Illuminate\Http\Request $request
   * @return array
   */
  public function toArray($request)
  {

    //        return parent::toArray($request);
    //      177
    return [
      "id"      => $this->id,
      "title"   => $this->title,
      "content" => $this->body,
      "body"    => $this->body,
//      185
      'commets' => new CommentCollection($this->comments),
    ];
  }
}
