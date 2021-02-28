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
            $data = Product::all();
            return DataTables::of($data)
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
              return $data->price;
                     })
          ->addColumn('category_id', function($data){
                 return $data->category_id;
                 
                     })
           ->addColumn('description', function($data){
                 return $data->description;
                      }) 
          ->addColumn('created_at', function($data){
                 return $data->created_at;
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