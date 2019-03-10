<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news'; //если таблица во множественном и модель во множественном
    public function category(){
    	return $this->belongsTo('App\Category');
    }

    public function getImageAttribute($value){
      return $value ? $value : '/uploads/nofoto.png';
    }

    public function setTitleAttribute($value){
    	$this->attributes['title'] = ucfirst($value);
    }
}
