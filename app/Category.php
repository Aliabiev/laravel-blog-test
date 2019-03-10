<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function news(){
    	return $this->hasMany('App\News');
    }
}
