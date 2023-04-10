<?php

namespace App\Http\Controllers\Stripe;

use Stripe\Stripe;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class StripeController extends Controller
{
    //
    public function checkout2(Request $request)
    {
        $data = $request->validate([
            'product_id' => ['required'],
            'quantity' => ['min:1']
        ]);

        $product = Product::findorFail($data['product_id']);

        //return view('checkout.single-product-checkout');

        Stripe::setApiKey(env('STRIPE_SECRET'));

        $checkout_session = \Stripe\Checkout\Session::create([
            'line_items' => [[
                # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
                'price_data' => [
                    'currency' => 'usd',
                    'product_data' => [
                        'name' => $product->name
                    ],
                    'unit_amount' => $product->price*100,
                ],
                'quantity' => $data['quantity'],
            ]],
            'mode' => 'payment',
            'success_url' => url('/'),
            'cancel_url' => url()->previous(),
            'payment_method_types' => ['card'],
        ]);

        return redirect()->away($checkout_session->url);
    }

    public function checkout(Request $request)
    {
        $data = $request->validate([
            'product_id' => ['required'],
            'quantity' => ['min:1']
        ]);

        $product = Product::findorFail($data['product_id']);
        
        return $request->user()
            ->checkoutCharge($product->price * 100, $product->name, $data['quantity']);
    }
}
