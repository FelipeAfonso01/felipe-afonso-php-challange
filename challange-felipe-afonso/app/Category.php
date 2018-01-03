<?php

namespace challange;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $table = 'categories';
  protected $fillable = array('name');

  public function produtos(){
    return $this->hasMany('challange\Product');
  }
}
