<?php

namespace App\Http\Services\Payment\Stripe;

use App\Models\Product;
use App\Http\Services\Payment\PaymentGateway;
use App\Models\Plan;

class StripePayment implements PaymentGateway
{
    public function checkout(Product $product, $orderData)
    {
        return request()->user()
            ->checkoutCharge($product->price * 100, $product->name, $orderData['quantity'], [
                'success_url' => url('checkout-success'),
                'cancel_url' => url()->previous()
            ]);
    }

    public function subscribe(Plan $plan)
    {
        $user = request()->user();
        
        $activeSubscription = $user->activeSubscription();

        if ($activeSubscription) {
            session()->flash('alert', 'You are already subscribed for ' . $activeSubscription->name . ' plan! :).');
            return redirect()->back();
        }

        return $user->newSubscription($plan->name, $plan->stripe_plan)
            ->checkout();
    }

    public function updateSubscription(Plan $plan)
    {
        $user = request()->user();
        $activeSubscription = $user->activeSubscription();

        if (!$activeSubscription) {
            session()->flash('alert', 'You are not subscribed in any plan.');
            return redirect()->back();
        }

        if ($activeSubscription->name == $plan->name) {
            session()->flash('alert', 'You are already subscribed for this plan! :).');
            return redirect()->back();
        }

        return $user->newSubscription($plan->name, $plan->stripe_plan)
            ->checkout();
    }

    public function cancelSubscription()
    {
        $user = request()->user();
        $activeSubscription = $user->activeSubscription();

        if (!$activeSubscription) {
            session()->flash('alert', 'You are not subscribed in any plan.');
            return redirect()->back();
        }

        if ($activeSubscription->ends_at) {
            session()->flash('alert', 'Your subscription was previously cancelled!. ' .
                'Your previous plan functionalities will be available until ' . $activeSubscription->ends_at);
            return redirect()->back();
        }

        $response = $user->subscription($activeSubscription->name)->cancel();

        $user->plan = 'guest';
        $user->save();

        session()->flash('alert', 'Your subscription was cancelled!. ' .
            'Your previous plan functionalities will be available until ' . $response->ends_at);
        return redirect()->back();
    }
}
