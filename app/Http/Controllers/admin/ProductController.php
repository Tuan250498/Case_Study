<?php

namespace App\Http\Controllers\admin;

use App\Http\Requests\ProductExampleRequest;
use App\Http\Requests\StoreProductRequest;
use App\Product;
use App\Types_product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function index()
    {
        $success = 'Nhập dữ liệu thành công!';
        $products = Product::paginate(10);
        $types_products = Types_product::all();
        return view('admin.products.list', compact('products', 'types_products', 'success'));
    }

    public function create()
    {
        $types_products = Types_product::all();
        return view('admin.products.create', compact('types_products'));
    }

    public function store(StoreProductRequest $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->color = $request->input('color');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $product->image = $path;
        } else {
            $product->image = 'images/6uS8z9O6snM7GBEEq34LZw1iqx8Ioc548gsAuKJt.png';
        }
        $product->network = $request->input('network');
        $product->sim = $request->input('sim');
        $product->memory = $request->input('Memory');
        $product->os = $request->input('os');
        $product->cpu = $request->input('cpu');
        $product->camera = $request->input('camera');
        $product->sdcard = $request->input('sdcard');
        $product->battery = $request->input('battery');
        $product->bluetooth = $request->input('bluetooth');
        $product->save();
        return redirect()->route('admin.index')->with('message','nhập dữ liệu thành công');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $types_products = Types_product::all();
        return view('admin.products.edit', compact('product', 'types_products'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->input('name');
        $product->color = $request->input('color');
        $product->quantity = $request->input('quantity');
        $product->price = $request->input('price');
        if ($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->store('images', 'public');
            $product->image = $path;
        } else {
            $product->image = 'images/6uS8z9O6snM7GBEEq34LZw1iqx8Ioc548gsAuKJt.png';
        }
        $product->network = $request->input('network');
        $product->sim = $request->input('sim');
        $product->memory = $request->input('Memory');
        $product->os = $request->input('os');
        $product->cpu = $request->input('cpu');
        $product->camera = $request->input('camera');
        $product->sdcard = $request->input('sdcard');
        $product->battery = $request->input('battery');
        $product->bluetooth = $request->input('bluetooth');
        $product->save();
//        $message = 'Update không thành công. ';
//        Session::flash('message'. $message);
        return redirect()->route('admin.index');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.index');
    }
    public function filterByCity(Request $request){
        $idTypes_product = $request->input('types_product_id');
        $typeFilter = Types_product::findOrFail($idTypes_product);
        $products = Product::where('types_product_id',  $typeFilter->id)->paginate(5);
        $totalProductFilter = count($products);
        $types_products = Types_product::all();

        return view('customers.list', compact('customers', 'types_products', 'totalProductFilter', 'typeFilter'));
    }
    public function search(Request $request)

    {

        $keyword = $request->input('keyword');

        if (!$keyword) {

            return redirect()->route('admin.index');

        }

        $products = Product::where('name', 'LIKE', '%' . $keyword . '%')

            ->paginate(5);


        $types_products = Types_product::all();

        return view('admin.products.list', compact('products', 'types_products'));


    }
}
