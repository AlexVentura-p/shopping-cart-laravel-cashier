<?php

namespace App\Http\Controllers\Web\Payments;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Payment\PaymentGateway;

class SinglePaymentController extends Controller
{
    private PaymentGateway $paymentGateway;

    function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function checkout(Request $request)
    {
        $data = $request->validate([
            'product_id' => ['required'],
            'quantity' => ['min:1']
        ]);

        $product = Product::findorFail($data['product_id']);
        
        return $this->paymentGateway->checkout($product,$data);
    }

    public function success()
    {
        return view('payment.single-product-success');
    }




}
