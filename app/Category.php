<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  public function posts(){
      //Un categoria tiene muchos posts
      return $this->hasMany(Post::class);
  }
}
