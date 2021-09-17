<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    public function checkout()
    {
        // Enter Your Stripe Secret
        \Stripe\Stripe::setApiKey('sk_test_51Ja1U7FMIwYpYHPUc5oL23bhjI9m65qrWn4KsVv2cAqEAibfMKk2Cf7W1LToonPu4LoMH2WjTYelCLMXZzWfCLOH00ezXdOZts');

        $amount = 100;
        $amount *= 100;
        $amount = (int) $amount;

        $payment_intent = \Stripe\PaymentIntent::create([
            'description' => 'Stripe Test Payment',
            'amount' => $amount,
            'currency' => 'BDT',
            'description' => 'Payment From Codehunger',
            'payment_method_types' => ['card'],
        ]);
        $intent = $payment_intent->client_secret;

        return view('checkout.credit-card',compact('intent'));

    }

    public function afterPayment()
    {
        echo 'Payment Has been Received';
    }
}
