<?php

namespace App\Models;

use App\Models\Plan;
use App\Models\User;
use Laravel\Cashier\Subscription as CashierSubscription;
 
class Subscription extends CashierSubscription
{

    protected static function booted()
    {
        static::created(function ($subscription) {
            
            $user = User::find($subscription->user_id);

            $user->plan = $subscription->name . ' plan';
            $user->save();
        });

        static::updated(function ($subscription) {
            $user = User::find($subscription->user_id);

            $user->plan = $subscription->name . ' plan';
            $user->save();
        });

        
    }
}
