<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Stripe\StripeController;
use App\Http\Controllers\Web\Payments\SinglePaymentController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\Payments\SubscriptionController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('products', [ProductController::class, 'index']);
Route::get('products/{product:slug}', [ProductController::class, 'show']);

Route::middleware('auth')->group(function () {
    Route::post('checkout', [SinglePaymentController::class, 'checkout']);
    Route::get('checkout-success', [SinglePaymentController::class, 'success']);
    Route::get('subscribe/{plan:slug}',[SubscriptionController::class,'subscribe']);
    Route::get('subscribe-update/{plan:slug}',[SubscriptionController::class,'update']);
    Route::get('update-page/{plan:slug}',[SubscriptionController::class,'updatePage']);
    Route::get('subscribe-cancel',[SubscriptionController::class,'cancel']);
    
});

Route::get('plans',[SubscriptionController::class,'index']);




Route::get('/', function () {
    return view('app');
})->name('home');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
