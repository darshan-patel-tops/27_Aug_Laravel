<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
    public function index()
    {
        // dd(\Auth::user()->role_id);
        if (\Auth::user()->role_id == 1) {
            return view('admin.dashbaord');
        } else {
            # code...
            return view('home');
        }
        
    }
}
