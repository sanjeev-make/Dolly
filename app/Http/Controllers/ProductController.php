<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\Storage;
use Session;






class ProductController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function create()
    {
        $category = ProductCategory::get();
        return view('dashboard.product' , compact('category'));
    }

     /**
      * add product.
      */

    public function store(Request $request)
    {     
        if (Product::where('title', $request->title)->exists()) {
            Session::flash('message', 'Already Exist!');
        }else{

            $request->validate([
                'category_id'           => 'required',
                'title'           => 'required',
                'price'           => 'required',
                'status'           => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);


            $product = new Product($request->input()) ;
     
            if($file = $request->hasFile('image')) {
               
               $file = $request->file('image') ;
               
               $fileName = $file->getClientOriginalName() ;
               $destinationPath = public_path().'/images/' ;
               $file->move($destinationPath,$fileName);
               $product->image = $fileName ;
           }

           $product->category_id        = $request->category_id;
           $product->title        = $request->title;
           $product->description        = $request->description;
           $product->price        = $request->price;
           $product->status        = $request->status;
           $product->image = $fileName ;
           $product->save();
           Session::flash('message', 'Product Add Successfully!');
        }


         return redirect()->back();

        
        } 

        public function destroy($id)
      {
          
       $delete_website_type =   Product::find($id)->delete();
        $delete_website_type = ProductCategory::find($id)->delete();
         if(delete_website_type) {
            $message = 'success';
         }else {
             $message = 'fail';
         }
          return json_encode($message);
         
      }

}