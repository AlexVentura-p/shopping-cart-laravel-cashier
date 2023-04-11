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
        return $request->user()->checkout('price_1MvWx5GMeX7S2HRxLsgSjuya');
    }
}
