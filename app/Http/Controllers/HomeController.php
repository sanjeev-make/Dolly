<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function authenticate()
    {
    
        // Login succeeded:
        $usertype = Auth::user()->id;
        if($usertype == 1){
         return redirect()->route('dashboard.index', array('page' => 'filmmaker'));          
        }
       else
        {
        return view('welcome', array('page' => 'login')); // Login failed, show login form again
        }
    }
}
