<?php

namespace App\Http\Controllers;

use App\Models\socials;
use App\Models\address;
use App\Models\catagory;
use App\Models\Mobile;
use Illuminate\Http\Request;

class SocialsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $contact = Mobile::all();
        return view("/pages/SocialsAndAddress",compact('contact'));
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
        $catagories = catagory::all();   
        $contact = Mobile::all();

        $adderesses = new address();
        $adderesses->country = $request->country_input;
        $adderesses->city = $request->city_input;
        $adderesses->street = $request->street_input;
        $adderesses->area = $request->area_input;
        $adderesses->phone = $request->phone_input;
        $adderesses->email = $request->email_input;

        $socialsAccounts = new socials();
        // $socialsAccounts->country = $request->country_input;
        // $socialsAccounts->city = $request->city_input;
        // $socialsAccounts->street = $request->street_input;
        // $socialsAccounts->area = $request->area_input;
        $socialsAccounts->Facebook = $request->facebook_input;
        $socialsAccounts->Instagram = $request->instagram_input;
        $socialsAccounts->Whatsapp = $request->whatsapp_input;
        $socialsAccounts->Twiter = $request->twiter_input;
        $socialsAccounts->save();
        $adderesses->save();
        return view("/pages/SocialsAndAddress",compact("contact","catagories","socialsAccounts","adderesses"));
        // return view("/pages/SocialsAndAddress",compact("contact","catagories"));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\socials  $socials
     * @return \Illuminate\Http\Response
     */
    public function show(socials $socials)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\socials  $socials
     * @return \Illuminate\Http\Response
     */
    public function edit(socials $socials)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\socials  $socials
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, socials $socials)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\socials  $socials
     * @return \Illuminate\Http\Response
     */
    public function destroy(socials $socials)
    {
        //
    }
}
