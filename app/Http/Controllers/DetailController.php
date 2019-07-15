<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class DetailController extends Controller
{
    public function details($id){
        $product = Product::findOrFail($id);
        return view('detail', compact('product'));
    }
}
