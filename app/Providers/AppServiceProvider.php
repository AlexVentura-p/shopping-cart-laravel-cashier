<?php

namespace App\Providers;

use App\Http\Services\Payment\PaymentGateway;
use App\Http\Services\Payment\Stripe\StripePayment;
use App\Models\Subscription;
use Laravel\Cashier\Cashier;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Cashier::useSubscriptionModel(Subscription::class);
        $this->app->bind(PaymentGateway::class, StripePayment::class);
    }
}
