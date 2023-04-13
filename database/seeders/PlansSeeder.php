<?php

namespace Database\Seeders;

use Stripe\Price;
use Stripe\Stripe;
use Stripe\Product;
use App\Models\Plan;
use Stripe\StripeClient;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PlansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Stripe::setApiKey(env('STRIPE_SECRET'));


        $basicPlan = Product::create([
            'name' => 'basic',
            'description' => 'Plan with essential features only.'
        ]);

        $basicPrice = Price::create([
            'unit_amount' => 1500,
            'currency' => 'usd',
            'recurring' => ['interval' => 'month'],
            'product' => $basicPlan->id
        ]);

        Plan::create([
            'name' => $basicPlan->name,
            'slug' => $basicPlan->name.'-plan',
            'stripe_plan' => $basicPrice->id,
            'price' => $basicPrice->unit_amount / 100,
            'description' => $basicPlan->description
        ]);

        $plusPlan = Product::create([
            'name' => 'plus',
            'description' => 'Plan with essential plus additional features.'
        ]);

        $plusPrice = Price::create([
            'unit_amount' => 3000,
            'currency' => 'usd',
            'recurring' => ['interval' => 'month'],
            'product' => $plusPlan->id
        ]);

        Plan::create([
            'name' => $plusPlan->name,
            'slug' => $plusPlan->name.'-plan',
            'stripe_plan' => $plusPrice->id,
            'price' => $plusPrice->unit_amount / 100,
            'description' => $plusPlan->description
        ]);

        $premiumPlan = Product::create([
            'name' => 'premium',
            'description' => 'Plan with essential + addtional features + advaced features.'
        ]);

        $premiumPrice = Price::create([
            'unit_amount' => 5000,
            'currency' => 'usd',
            'recurring' => ['interval' => 'month'],
            'product' => $premiumPlan->id
        ]);

        Plan::create([
            'name' => $premiumPlan->name,
            'slug' => $premiumPlan->name.'-plan',
            'stripe_plan' => $premiumPrice->id,
            'price' => $premiumPrice->unit_amount / 100,
            'description' => $premiumPlan->description
        ]);
    }
}
