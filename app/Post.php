<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  protected $dates = ['published_at'];

  public function category() {
    //un post pertenece a una categoria
    return $this.belongsTo('Category::class');
  }
}
