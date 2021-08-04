<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;
//    78
  protected $fillable = [
    'title', 'body'
  ];
//    68
    public function comments()
    {
      return $this->hasMany(Comment::class,'article_id', 'id');
    }
}
