<?php

namespace App\Http\Controllers;

use App\Product;
use App\Types_product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(10);
        $types_products = Types_product::all();
        return view('admin.products.list', compact('products','types_products'));
    }
}
