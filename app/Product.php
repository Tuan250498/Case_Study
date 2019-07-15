<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function Types_product(){
        return $this->hasMany('App\Types_product');
    }
}
