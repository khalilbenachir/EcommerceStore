<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Product;
use Session;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function getIndex(){
        $products=Product::all();
        return view('shop.index',['products'=>$products]);
    }

    public function getAddtoCart(Request $request,$id){
       $product=Product::find($id);
       $oldCart=Session::has('cart')?Session::get('cart'):null;
       $cart=new Cart($oldCart);
       $cart->add($product,$product->id);
       $request->session()->put('cart',$cart);
       return redirect()->route('product.index');
    }

    public function getCart(){

        $oldcart=Session::get('cart');
        $cart=new Cart($oldcart);
        return view('shop.shopping-cart',['products'=>$cart->items,'totalPrice'=>$cart->totalPrice]);
    }


    public function getCheckout(){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldcart=Session::get('cart');
        $cart=new Cart($oldcart);
        $total=$cart->totalPrice;
        return view('shop.checkout',['total'=>$total]);
    }

    public function postCheckout(Request $request){
        if(!Session::has('cart')){
            return view('shop.shopping-cart');
        }
        $oldcart=Session::get('cart');
        $cart=new Cart($oldcart);

        try{

            \Stripe\Stripe::setApiKey("sk_test_oDuwkZFZjN5wyoOjIn9CIu1A");
            $token = $request->input('stripeToken');

            $charge = \Stripe\Charge::create([
                'amount' => $cart->totalPrice*100,
                'currency' => 'usd',
                'description' => 'Example charge',
                'source' => $token,
                'statement_descriptor' => 'Custom descriptor',
            ]);
        }catch (\Exception $e){
                return redirect()->route('checkout')->with('error',$e->getMessage());
        }
        Session::forget('cart');
        return redirect()->route('product.index')->with('success','successfully purchased');
    }
}
