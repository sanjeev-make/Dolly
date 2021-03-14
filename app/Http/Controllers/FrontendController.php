<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class FrontendController extends Controller
{

public function welcome()
{
   $products =  Product::
     select('products.*','product_categories.name as category_name')
    ->leftJoin('product_categories','products.category_id','=','product_categories.id')
    ->get();

    return view('welcome',compact('products'));
}

   
    public function detail($id)
    {

        $productdetail = Product::where('id',$id)->first();
        $image = Product::get();
        return view('frontendpage.detail',compact('productdetail','image'));
    }

    public function category()
    {
        return view('frontendpage.category');
    }
}
