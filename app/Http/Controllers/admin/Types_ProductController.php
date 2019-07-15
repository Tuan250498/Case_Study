<?php

namespace App\Http\Controllers\admin;

use App\Types_product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class Types_ProductController extends Controller
{
    public function index(){
        $types_products = Types_product::paginate(10);
        return view ('admin.type_product.list', compact('types_products'));
    }
    public function create(){
        return view('admin.type_product.create');
    }
    public function store(Request $request){
        $types_product = new Types_product();
        $types_product->name= $request->input('name');
        $types_product->save();
        return redirect()->route('types.index');
    }
    public function edit(Request $request, $id){
        $types_product = Types_product::findOrFail($id);
        return view('admin.type_product.edit', compact('types_product'));
    }
    public function update(Request $request, $id){
        $types_product = Types_product::findOrFail($id);
        $types_product->name = $request->input('name');
        $types_product->save();
        return redirect()->route('types.index');
    }
    public function destroy($id){
        $types_product = Types_product::findOrFail($id);
        $types_product ->products()->delete();
        $types_product->delete();
        return redirect()->route('types.index');
    }
}
