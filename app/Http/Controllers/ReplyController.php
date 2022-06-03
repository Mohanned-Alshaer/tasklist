<?php

namespace App\Http\Controllers;

use App\Models\reply;
use App\Models\Mobile;
use App\Models\Catagories;
use Illuminate\Http\Request;

class ReplyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $contact = Mobile::all();
        // return view("/pages/addCatagory",compact("contact"));
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $message = new reply();
        $message->Reply = $request->Your_Reply;
        $message->save();
        return redirect()->back();
    }

    // public function storeCat(Request $request)
    // {
    //     $catagory = new Catagories();
    //     $catagory->Catagory = $request->ctagory_name;
    //     $catagory->save();
    //     // return redirect()->back();
    // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function show(reply $reply)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function edit(reply $reply)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, reply $reply)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\reply  $reply
     * @return \Illuminate\Http\Response
     */
    public function destroy(reply $reply)
    {
        //
    }
}
