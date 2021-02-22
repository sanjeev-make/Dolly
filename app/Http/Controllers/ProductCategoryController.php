<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductCategory;

class ProductCategoryController extends Controller
{
    public function create()
    {
        return view('dashboard.product-category');
    }

    public function store(Request $request)
    {     dd($request->all());
            $request->validate([
                'name'           => 'required',
            ]);
   
            ProductCategory::create([
               'name'          => $request->name,
           ]);
           $response = array(
            'status' => 'success',
            'msg' => 'Category created successfully',
        );

        return \Response::json($response);
        }     

    }

