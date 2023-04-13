<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Stripe\StripeController;
use App\Http\Controllers\Web\ProductController;
use App\Http\Controllers\Web\SubscriptionController;
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
    Route::post('checkout', [StripeController::class, 'checkout']);
    Route::get('checkout-success', [StripeController::class, 'success']);
    Route::get('subscribe/{plan:slug}',[SubscriptionController::class,'subscribe']);
    Route::get('subscribe-update/{plan:slug}',[SubscriptionController::class,'update']);
    Route::get('subscribe-cancel',[SubscriptionController::class,'cancel']);
    
});

Route::get('plans',[SubscriptionController::class,'index']);




Route::get('/', function () {
    return view('app');
})->name('home');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
