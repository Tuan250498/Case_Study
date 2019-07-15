<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Types_product extends Model
{
    public function products(){
        return $this->hasMany('App\Product');
    }
}
