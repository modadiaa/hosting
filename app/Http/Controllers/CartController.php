<?php

namespace App\Http\Controllers;

use App\Products_model;
//use Cart;
use Gloudemans\Shoppingcart\Facades\Cart ;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        $cartItems= Cart::content();
        return view('cart.index' , compact('cartItems'));
    }
    public function addItem($id) {
        $product=Products_model::findOrFail($id);
        Cart::add($id,$product->pro_name,1,$product->pro_price,['img'=>$product->image , 'stock'=>$product->stock]);
        return back();
    }
    public function update(Request $request ,$id){
        $qty = $request->qty ;
        $proId = $request->proId ;
        $product=Products_model::findOrFail($proId);
        $stock = $request->stock ;
        if($qty>$stock){
            Cart::update($id,$request->qty);
            return back()->with('status' ,'Cart is updated');
        }else{
            return back()->with('error' ,'please check your qty is more than product stock');

        }
    }

    public function destroy($id){
      Cart::remove($id);
      return back();
    }
}
