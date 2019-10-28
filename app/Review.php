<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Products;

class Review extends Model
{
    public function products(){

    	return $this->belongsTo('App\Products');
    }
}
