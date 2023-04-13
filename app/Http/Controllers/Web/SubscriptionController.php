<?php

namespace App\Http\Controllers\Web;

use Stripe\Quote;
use Stripe\Stripe;
use App\Models\Plan;
use App\Models\User;
use App\Models\Subscription;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function index()
    {
        return view('subscriptions.plans');
    }

    public function subscribe(Plan $plan)
    {
        $user = request()->user();
        $activeSubscription = $user->activeSubscription();

        if($activeSubscription){
            session()->flash('alert','You are already subscribed for '. $activeSubscription->name.' plan! :).');
            return redirect()->back();
        }
        
        return $user->newSubscription($plan->name, $plan->stripe_plan)
            ->checkout();
        
    }

    public function cancel()
    {
        $user = request()->user();
        $activeSubscription = $user->activeSubscription();

        if (!$activeSubscription){
            session()->flash('alert','You are not subscribed in any plan.');
            return redirect()->back();
        }

        $user->subscription($activeSubscription->name)->cancelNow();

        $user->plan = 'guest';
        $user->save();

        session()->flash('alert','You were successfully unsubscribed!. ');
        return redirect()->back();
    }

    public function update(Plan $plan)
    {

        $user = request()->user();
        $activeSubscription = $user->activeSubscription();

        if (!$activeSubscription){
            session()->flash('alert','You are not subscribed in any plan.');
            return redirect()->back();
        }

        if($activeSubscription->name == $plan->name){
            session()->flash('alert','You are already subscribed for this plan! :).');
            return redirect()->back();
        }

        $user->subscription($activeSubscription->name)->cancelNow();

        return $user->newSubscription($plan->name, $plan->stripe_plan)
            ->checkout();
    }

}
