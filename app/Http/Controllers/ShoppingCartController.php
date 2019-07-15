<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ShoppingCartController extends Controller
{
    public function index(){
        $cart = Session::get('cart');
        return view('cart.index', compact('cart'));
    }
    public function addToCart(Request $request, $id){
        $product = Product::finOrFail($id);
        if(Session::has('cart')){
            $oldCart = Session::get('cart');
        }else{
            $oldCart = null;
        }
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);
        Session::put('cart', $cart);
        Session::flash('success', 'Thêm sản phẩm khỏi giỏ hàng thành công');
        return redirect()->back();
    }
}
