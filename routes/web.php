<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::post('/order/{product}', [OrderController::class, 'order'])->middleware('auth')->name('order');
Route::get('/profile', [HomeController::class, 'profile'])->middleware('auth')->name('profile');
Route::get('/payment/{order}', [OrderController::class, 'payment'])->name('payment');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::post('/login', function () {
    return view('login');
});
