<?php

namespace App\Http\Controllers;
use App\Models\shop;
use App\Models\Mobile;
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
        $products = shop::all();
        $contact = Mobile::all();
        return view('/layout/admin', compact("products","contact"));
    }
}
