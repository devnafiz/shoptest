<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    public function tags(){

    	return $this->belongsToMany('App\Tags');
    }
}
