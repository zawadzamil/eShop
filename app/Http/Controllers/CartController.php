<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Auth::check()) {
            $cart = Cart::create([
                'product_id' => $request['product_id'],
                'user_id' => Auth::user()->id,
                'quantity' => $request['quantity'],
            ]);
            $cart->save();
            return redirect('/shop')->with('success', ' Product Added to Cart. Continue Shoping');
        } else {
            return redirect('login')->with('failed', 'You Must  Log In First');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $id = Auth::user()->id;
        $carts = Cart::where('user_id',$id)->get();


        return view('showCartItem')->with('carts', $carts);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = Cart::find($id);
        $update->quantity = $request->get('quantity');
        $update->save();
        return redirect()->route('viewCart');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Cart $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        //
    }


}
