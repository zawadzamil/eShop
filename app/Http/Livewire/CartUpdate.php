<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Livewire\Component;

class CartUpdate extends Component
{
    public $cart = [];

    public $message = "Not Clicked";

    public function callFunction()
    {
        $this->message = "You clicked on button";
    }

    public function mount($cart)
    {
        $this->cart = $cart;
        $this->qunttity = $cart['quantity'];


    }

    public function update()
    {
        dd('ok');

//        $product = Cart::where('id',$id);
//        $qty = $product->quantity + 1;
//        $product->quantity = $qty;
//        $product->save();


    }


    public function render()
    {
        return view('livewire.cart-update')->extends('mainLayout');
    }

}
