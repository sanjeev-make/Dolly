<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkoutcreate()
    {
        return view('frontendpage.checkout');
    }
}