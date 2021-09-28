<?php

namespace App\Http\Livewire;

use App\Models\Cart;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartCounter extends Component
{
    public $carts = [];
    public $cart_quantity = "";

    public function mount()
    {
        $id = Auth::user()->id;
        $this->carts = Cart::where('user_id', $id)->get();

    }


    public function render()
    {
        return view('livewire.cart-counter')->extends('mainLayout');
    }
}
