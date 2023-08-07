<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;
use DB;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(product $product)
    {
        // $AllProducts = $product->get();
        // $AllProducts =  DB::table('users')->get();
        // Flight::where('active', 1)->orderBy('name')->take(10)->get();
        $AllProducts =$product::get();
        // dd($AllProducts);
        //
        return view("admin.productslist",compact('AllProducts'));
        dd("called");

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
    public function store(Request $request,product $product){
        $product->product_quantity =$request->product_quantity; 
        $product->product_title = $request->product_title;
        $product->product_description = $request->product_description;
        $product->product_price = $request->product_price ;
        $product->save();
        return redirect("products");
        // dd($request->all());
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    // public function edit($id,product $product)
    public function edit($anything,product $product)
    {
        $ProductDataById = $product->find($anything);
        return view("admin.editproduct",compact('ProductDataById'));
        dd($ProductDataById);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function update($id,Request $request, product $product)
    {
        $ProductDataById = $product->find($id);
        $ProductDataById->product_quantity =$request->product_quantity; 
        $ProductDataById->product_title = $request->product_title;
        $ProductDataById->product_description = $request->product_description;
        $ProductDataById->product_price = $request->product_price ;
        $ProductDataById->save();
        return redirect("products");
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(product $product)
    {
        //
    }
}
