<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DataTables;
use App\Models\Product;
use App\Models\ProductCategory;




class AdminController extends Controller
{
   

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function dashboard(Request $request)
    {
        if ($request->ajax()) {
            $data = Product::join('product_categories', 'products.category_id', '=', 'product_categories.id')
    ->select(['products.*', 'product_categories.name as categoryname'])
    ;
            return DataTables::of($data)
            ->filterColumn('title', function($query, $keyword) use ($request) {
                $query->orWhere('products.title', 'LIKE', '%' . $keyword . '%')
                ->orWhere('products.status', 'LIKE', '%' . $keyword . '%')
                ->orWhere('products.price', 'LIKE', '%' . $keyword . '%')
                ->orWhere('products.category_id', 'LIKE', '%' . $keyword . '%')
                ->orWhere('products.description', 'LIKE', '%' . $keyword . '%')
                ->orWhere('products.created_at', 'LIKE', '%' . $keyword . '%')

               ;
            })
                ->addIndexColumn()
          ->addColumn('title', function($data){
            return $data->title;
                })
                ->addColumn('status', function($data){
              if($data->status==0){
                return 'Active';
              }else{
                  return 'InActive';
              }
                })
           ->addColumn('price', function($data){
              return 
              $data->price;
                     })
          ->addColumn('categoryname', function($data){
                 return $data->categoryname;
                 
                     })
           ->addColumn('description', function($data){
                 return $data->description;
                      }) 
          ->addColumn('created_at', function($data){
                 return 
                 date('d-m-Y', strtotime($data->created_at)); 
                })                

                // ->addColumn('action', function($row){
                //     $actionBtn = '<a href="javascript:void(0)" class="edit btn btn-success btn-sm">Edit</a> <a href="javascript:void(0)" class="delete btn btn-danger btn-sm">Delete</a>';
                //     return $actionBtn;
                // })
                ->rawColumns(['description'])
                ->make(true);
        }

        return view('dashboard.index');
    }

    public function formelement()
    {
        return view('dashboard.basic-element');
    }


}