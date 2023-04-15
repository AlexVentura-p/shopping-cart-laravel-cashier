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
            
            $user = $subscription->user;
            

            $existingSubscriptions = $user->subscriptions()->where('stripe_status', 'active')->get();
            
            foreach ($existingSubscriptions as $existingSubscription) {

                if($existingSubscription->id != $subscription->id)
                {
                    $existingSubscription->cancelNow();
                }
                
            }

            $user->plan = $subscription->name . ' plan';
            $user->save();

        });

        
    }
}
