<?php

namespace App\Http\Controllers\Stripe;

use Stripe\Stripe;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;

class StripeController extends Controller
{

    public function checkout(Request $request)
    {
        $data = $request->validate([
            'product_id' => ['required'],
            'quantity' => ['min:1']
        ]);

        $product = Product::findorFail($data['product_id']);
        
        return $request->user()
            ->checkoutCharge($product->price * 100, $product->name, $data['quantity'],[
                'success_url' => url('checkout-success'),
                'cancel_url' => url()->previous()
            ]);
    }

    public function success()
    {
        return view('cashier.stripe.single-product-success');
    }
}
