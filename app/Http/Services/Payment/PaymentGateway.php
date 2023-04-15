<?php

namespace App\Http\Services\Payment;

use App\Models\Plan;
use App\Models\Product;

interface PaymentGateway 
{
    public function checkout(Product $product, array $orderData);

    public function subscribe(Plan $plan);

    public function updateSubscription(Plan $plan);

    public function cancelSubscription();
}