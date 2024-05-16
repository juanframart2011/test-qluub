<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\WelcomeController;

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // User routes
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');

    // Product routes
    Route::resource('products', ProductController::class);

    // Cart routes
    Route::get('/cart', [OrderController::class, 'index'])->name('cart.index');
    Route::post('/cart/remove/{id}', [OrderController::class, 'remove'])->name('cart.remove');
    Route::get('/cart/apart', [OrderController::class, 'apart'])->name('cart.apart');
    Route::get('/cart/cancel', [OrderController::class, 'cancel'])->name('cart.cancel');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
