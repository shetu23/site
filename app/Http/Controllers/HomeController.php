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

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function authorHome()
    {
        return view('home',["msg"=>"i am user role"]);
    }
    public function adminHome()
    {
        return view('home',["msg"=>"i am user role"]);
    }
    public function super_adminHome()
    {
        return view('home',["msg"=>"i am user role"]);
    }
}
