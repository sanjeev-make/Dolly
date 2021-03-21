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

    $favouritelist = Product::where('favourite' ,'=','1')
    ->select('products.*','users.name as users_name')
    ->leftJoin('users','products.user_id','=','users.id')
    ->orderBy('id', 'DESC')->get();

    $featured = Product::where('featured' ,'=','1')
    ->select('products.*','users.name as users_name')
    ->leftJoin('users','products.user_id','=','users.id')
    ->orderBy('id', 'DESC')->first();

    return view('welcome',compact('products','favouritelist','featured'));
}

   
    public function detail($id)
    {

        $productdetail = Product::where('id',$id)->first();
        $category =  $productdetail->category_id;
        $image = Product::get();
        $favouritelist = Product::where('favourite' ,'=','1')
        ->select('products.*','users.name as users_name')
        ->leftJoin('users','products.user_id','=','users.id')
        ->orderBy('id', 'DESC')->get();

      $trandingbook = Product::where('tranding_list' ,'=','1')
     ->select('products.*','product_categories.name as category_name')
     ->leftJoin('product_categories','products.category_id','=','product_categories.id')
     ->orderBy('id', 'DESC')->get();

     $similarbook = Product::where('category_id', 'LIKE', "%{$category}%")
     ->select('products.*','users.name as users_name')
     ->leftJoin('users','products.user_id','=','users.id')->get()
     ;
    //  dd($similarbook);

        return view('frontendpage.detail',compact('productdetail','image','favouritelist','trandingbook','similarbook'));
    }

    public function category(Request $request)
    {
// dd($request->all());
      $title = $request->title;
      $category = $request->category_name;

        $allcategory = Product::select('products.*','product_categories.name as category_name')
        ->leftJoin('product_categories','products.category_id','=','product_categories.id')

        ->where('product_categories.name', 'LIKE', "%{$category}%")
        ->where('title', 'LIKE', "%{$title}%")
        ->get();
       
        // if(!empty($query->category_id))
        // {
            
        // }
        // if(!empty($query->title)){
        //     $query->where('title', 'LIKE', "%{$title}%")
        // }
              
        // $allcategory = $query->get();

         $categoryget = Product::
        select('products.*','product_categories.name as category_name')
        ->leftJoin('product_categories','products.category_id','=','product_categories.id')->get();

        $trandingbook = Product::where('tranding_list' ,'=','1')
      ->select('products.*','product_categories.name as category_name')
      ->leftJoin('product_categories','products.category_id','=','product_categories.id')
      ->orderBy('id', 'DESC')->get();
      $favouritelist = Product::where('favourite' ,'=','1')
     ->select('products.*','users.name as users_name')
     ->leftJoin('users','products.user_id','=','users.id')
     ->orderBy('id', 'DESC')->get();
        return view('frontendpage.category',compact('allcategory','trandingbook','favouritelist','categoryget'));
    }
}
