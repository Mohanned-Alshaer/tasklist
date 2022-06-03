<?php
namespace App\Http\Controllers;
use App\Models\shop;
use App\Models\Mobile;
use App\Models\catagory;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = shop::all();
        $catagories = catagory::all();
        return view("/index", compact("products","catagories"));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contact = Mobile::all();
        $catagories = catagory::all();
        return view("/pages/add",compact("contact","catagories"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new shop();
        $products->Name = $request->product_name;
        $products->Price = $request->product_price;
        $products->Category = $request->category;
        $products->Quantity = $request->product_qty;
        if ($request->product_img){
            $image = time() .'.'.$request->product_img->extension();
            $request->product_img->move(public_path('images'),$image);
            $products->image = $image;
        }
        $products->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MidExam  $midExam
     * @return \Illuminate\Http\Response
     */
    public function show(shop $shop)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\shop  $midExam
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $catagories = catagory::all();
        $product = shop::find($id);
        $product->Name = $request->input("product_name");
        $product->Price = $request->input("product_price");
        $product->Category = $request->input("category");
        $product->Quantity = $request->input("product_qty");
        if ($request->product_img){
            $image = time() .'.'.$request->product_img->extension();
            $request->product_img->move(public_path('images'),$image);
            $product->image = $image;
        }
        $product->save();
        return redirect("/home",compact("catagories"));
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\shop  $midExam
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $contact = Mobile::all();
        $product = shop::find($id);
        $products = shop::all();
        $catagories = catagory::all();
        return view("/pages/edit",compact('product','products','contact','catagories'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MidExam  $midExam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        shop::find($id)->delete();
        return redirect()->back();
    }
}
