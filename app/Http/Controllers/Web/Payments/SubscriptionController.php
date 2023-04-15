<?php

namespace App\Http\Controllers\Web\Payments;

use Stripe\Quote;
use Stripe\Stripe;
use App\Models\Plan;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Services\Payment\PaymentGateway;
use Illuminate\Support\Facades\Auth;
use Stripe\PaymentIntent;

class SubscriptionController extends Controller
{

    private PaymentGateway $paymentGateway;

    function __construct(PaymentGateway $paymentGateway)
    {
        $this->paymentGateway = $paymentGateway;
    }

    public function index()
    {
        return view('subscriptions.plans');
    }

    public function subscribe(Plan $plan)
    {
        return $this->paymentGateway->subscribe($plan) ;
    }

    public function cancel()
    {
        return $this->paymentGateway->cancelSubscription();
    }

    public function update(Plan $plan)
    {
        return $this->paymentGateway->updateSubscription($plan);
    }
}
