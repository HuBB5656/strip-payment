<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Stripe;

class PaymentController extends Controller
{
    public function index(){
        return view('index');
    }

    public function checkout(){
        Stripe::setApiKey(config('stripe.sk'));
        $session = Session::create([
           'line_items' => [
              [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'T-shert',
                    ],
                    'unit_amount' => 53.6 * 100,
                ],
                'quantity' => 10,
            ],
            [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Tobe',
                    ],
                    'unit_amount' => 505 * 100,
                ],
                'quantity' => 3,
            ],
            [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Body',
                    ],
                    'unit_amount' => 55 * 100,
                ],
                'quantity' => 2,
            ],
            [
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => 'Suks',
                    ],
                    'unit_amount' => 34.7 * 100,
                ],
                'quantity' => 5,
            ],
           
           ],
           'mode' => 'payment',
           'success_url' => route('success'),
           'cancel_url' => route('pay'),
   
        ]);
       return redirect()->away($session->url);
    }

    public function success(){
        return view('index');
    }
}
