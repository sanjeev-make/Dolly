<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Models\Cart;
class CartController extends Controller
{
    
    public function addToCart(Request $request)
{
    $user = Auth::user();
    $cart = new Cart();
    if(Auth::check()){
    $cart->user_id  = $user->id;
     }
    
    $cart->title  = $request->title;
    $cart->description  = $request->description;
    $cart->price  = $request->price;
    $cart->quantity = $request->quantity;
    $cart->session_id = $request->_token;
    $cart->image  = $request->image;
    $cart->product_id  = $request->product_id;
    $cart->save();
    session()->flash('message', 'Item added to cart !');
     return back();
}
}
