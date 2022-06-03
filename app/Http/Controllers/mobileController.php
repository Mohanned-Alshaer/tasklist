<?php

namespace App\Http\Controllers;
use App\Models\shop;
use App\Models\Mobile;
use App\Models\socials;
use App\Models\address;
use Illuminate\Http\Request;

class mobileController extends Controller
{
    public function index(){
        $products = shop::all();
        $contact = Mobile::all();
        $addresses = address::all();
        $social = socials::all();
        return view("mobile/index",compact('products','contact','addresses','social'));
    }
    public function about(){
        $products = shop::all();
        $addresses = address::all();
        $social = socials::all();
        $contact = Mobile::all();
        return view("mobile/about",compact('products','contact','addresses','social','contact'));
    }
    public function brand(){
        $products = shop::all();
        $addresses = address::all();
        $social = socials::all();
        $contact = Mobile::all();
        return view("mobile/brand",compact('products','contact','addresses','social','contact'));
    }
    public function special(){
        $products = shop::all();
        $addresses = address::all();
        $social = socials::all();
        $contact = Mobile::all();
        return view("mobile/special",compact('products','contact','addresses','social','contact'));
    }
    public function contact(){
        $addresses = address::all();
        $social = socials::all();
        $products = shop::all();
        $contact = Mobile::all();
        return view("mobile/contact",compact('products','contact','addresses','social','contact'));
    }
    public function store(Request $request)
    {
        $product = new Mobile();
        $product->Name = $request->Your_Name;
        $product->Email = $request->Your_Email;
        $product->Phone = $request->Your_Phone;
        $product->Message = $request->Your_Message;
        $product->save();
        return redirect()->back();
    }
}
