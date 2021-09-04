<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $image = $request->file('image');
        $image_name = md5(time().rand()).".".$image ->getClientOriginalExtension();
        $request->image-> move(public_path('images'), $image_name);

        $product= Product::create([
            'name' => $request['name'],
            'price' => $request['price'],
            'image' => $image_name,

            'quantity' =>$request['quantity'],
            'description' =>$request['description'],
            'status' =>$request['status'],
            'offer_price' =>$request['offer_price'],
        ]);
        $product ->save();
        return redirect()->back()->with('success', ' Data is Saved Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $image_name = md5(time().rand()).".".$image ->getClientOriginalExtension();
        $request->image-> move(public_path('images'), $image_name);

        $update = Product::find($id);
        $update->name = $request->get('name');
        $update->price = $request->get('price');
        $update->image = $image_name;
        $update->quantity = $request->get('quantity');
        $update->description = $request->get('description');
        $update->status = $request->get('status');
        $update->offer_price = $request->get('offer_price');
        $update->save();
        return redirect()->route('dashboard');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($product)
    {
       Product::destroy($product);
        return redirect()->back()->with('success', ' Data is Deleted Successfully');
    }
}
