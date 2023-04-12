<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscriptions.plans');
    }

    public function subscribe(Request $request)
    {
        $plan = $request->validate([
            'plan' => ['required'],
        ]);

        return $request->user()
        ->newSubscription($plan['plan'], 'price_1MvWx5GMeX7S2HRxLsgSjuya')
        ->checkout();
    }
}
