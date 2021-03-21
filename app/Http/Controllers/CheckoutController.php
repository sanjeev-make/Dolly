<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;

class CheckoutController extends Controller
{
    public function checkoutcreate()
    {
       $data = Cart::first();
        $cart = Cart::
        where('session_id' ,$data->session_id)->get();
        return view('frontendpage.checkout',compact('cart'));
    }
}
