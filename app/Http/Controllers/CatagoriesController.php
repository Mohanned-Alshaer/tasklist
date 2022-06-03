<?php

namespace App\Http\Controllers;

use App\Models\Catagories;
use App\Models\catagory;
use App\Models\Mobile;
use Illuminate\Http\Request;

class CatagoriesController extends Controller{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contact = Mobile::all();
        $catagories = catagory::all();
        return view("/pages/addCatagory",compact("contact","catagories"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    public function print()
    {
        $catagories = catagory::all();
        $contact = Mobile::all();
        return view("/pages/allCatagories",compact('catagories','contact'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $catagories = catagory::all();   
        $contact = Mobile::all();
        $catagory = new Catagories();
        $catagory->Catagory = $request->ctagory_name;
        $catagory->save();
        return view("/pages/addCatagory",compact("contact","catagories"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Catagories  $catagories
     * @return \Illuminate\Http\Response
     */
    public function show(Catagories $catagories)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Catagories  $catagories
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $catagories = catagory::all();
        $NewCatagory = catagory::find($id);
        $NewCatagory->Catagory = $request->input("catagory_input");
        $NewCatagory->save();
        return redirect("/pages/allCatagories",compact("catagories"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Catagories  $catagories
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $contact = Mobile::all();
        $product = catagory::find($id);
        // $products = catagory::all();
        $catagories = catagory::all();
        return view("/pages/editCatagory",compact('product','contact','catagories'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Catagories  $catagories
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        catagory::find($id)->delete();
        return redirect()->back();
    }
}
