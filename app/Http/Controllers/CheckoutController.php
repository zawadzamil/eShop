<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderProduct;
use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Stripe\Customer;

class CheckoutController extends Controller
{
    public function checkout($total)
    {
        // Enter Your Stripe Secret
       $stripe= \Stripe\Stripe::setApiKey('sk_test_51Ja1U7FMIwYpYHPUc5oL23bhjI9m65qrWn4KsVv2cAqEAibfMKk2Cf7W1LToonPu4LoMH2WjTYelCLMXZzWfCLOH00ezXdOZts');

        $amount = $total;
        $amount *= 100;
        $amount = (int) $amount;
        $user = Auth::user();
        $customer = Customer::create(array(
            'email' => $user->email,
            'name' => $user->name
        ));

        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => 'Stripe Test Payment',
            'amount' => $amount,
            'currency' => 'BDT',
            'description' => 'Payment From E-Furniture by '.Auth::user()->name,
            'payment_method_types' => ['card'],
            'customer' => $customer->id


        ]);
        $intent = $payment_intent->client_secret;





        return view('checkout.credit-card',compact('intent','payment_intent'));

    }

    public function afterPayment()
    {
        //Add data to order table
        $value =  Session::get('totalAmo');
        $order = Order::create([
            'user_id' =>Auth::user()->id,
            'user_name' => Auth::user()->name,
            'user_email' =>Auth::user()->email,
            'address' =>Auth::user()->address,
            'total_amount' =>$value,
            'payment_method' =>'Online Payment (Stripe) ',
            'payment_status' =>1,
            'status' =>0,

        ]);
        $order->save();
        //Create Order Product Table
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        foreach ($carts as $item)
        {
            $orderProduct = OrderProduct::create([
                'order_id'=>$order->id,
                'product_id'=>$item->product_id,
                'quantity'=>$item->quantity,


            ]);
            $orderProduct->save();
        }
        //Destroy Cart

        echo ('Payment Received');
    }
    public function cashonDelivery()
    {

        return view('checkout.cashOnDelivery');
    }
    public function cashOrederAdd(Request $request)
    {
        $value =  Session::get('totalAmo');
        $address = $request->address.' , '.$request->city;
        $order = Order::create([
            'user_id' =>Auth::user()->id,
            'user_name' => $request->name,
            'user_email' =>$request->email,
            'address' =>$address,
            'total_amount' =>$value,
            'payment_method' =>'Cash On Delivery ',
            'payment_status' =>0,
            'status' =>0,

        ]);
        $order->save();
        //Create Order Product Table
        $carts = Cart::where('user_id',Auth::user()->id)->get();
        foreach ($carts as $item)
        {
            $orderProduct = OrderProduct::create([
                'order_id'=>$order->id,
                'product_id'=>$item->product_id,
                'quantity'=>$item->quantity,


            ]);
            $orderProduct->save();
        }
        return redirect()->route('dashboard');


    }
}
