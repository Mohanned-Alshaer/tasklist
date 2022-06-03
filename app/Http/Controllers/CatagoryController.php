<?php

namespace App\Http\Controllers;

use App\Models\shop;
use App\Models\Mobile;
use App\Models\catagory;
use Illuminate\Http\Request;

class CatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = shop::all();
        $contact = Mobile::all();
        $catagories = catagory::all();
        return view('/layout/admin', compact("products", "contact", "catagories"));
    }

    public function catag($id)
    {
        $catagory = catagory::find($id);
        $products = shop::get()->where('Category',$catagory->Catagory);
        $contact = Mobile::all();
        $catagories = catagory::all();
        return view('/layout/catagory', compact("products", "contact", "catagories","catagory"));
    }
    // public function catag2(){
    //     $products = shop::get()->where('Category','Samsung');
    //     $contact = Mobile::all();
    //     return view('/layout/catagory2', compact("products","contact"));
    // }
    // public function catag3(){
    //     $products = shop::get()->where('Category','Redmi');
    //     $contact = Mobile::all();
    //     return view('/layout/catagory3', compact("products","contact"));
    // }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function message($id)
    {
        $contact = Mobile::all();
        $message = Mobile::find($id);
        return view('/pages/messages', compact("contact", "message"));
    }
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function show(catagory $catagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function edit(catagory $catagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, catagory $catagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\catagory  $catagory
     * @return \Illuminate\Http\Response
     */
    public function destroy(catagory $catagory)
    {
        //
    }
}
