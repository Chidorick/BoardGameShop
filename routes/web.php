<?php

use App\Http\Controllers\LoginController;
use Illuminate\Foundation\Bootstrap\LoadConfiguration;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Nette\Utils\Image;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\SignUpController;
use App\Http\Controllers\AddToCartController;
use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [MainController::class, 'home'])->name('home');

Route::get('/signup', [SignUpController::class, 'signup']);
Route::post('/signup/check', [SignUpController::class, 'signupCheck']);
Route::get('/username', function () {
    $name = Auth::user()->name;
    return ($name);
});

Route::get('/login', [LoginController::class, 'login']);
Route::get('/logout', [LogoutController::class, 'logout']);
Route::post('/login/check', [LoginController::class, 'login_check']);

Route::get('/addtocart/{good_id}', [AddToCartController::class, 'addToCart']);
Route::post('/addtocart/check', [AddToCartController::class, 'addToCartCheck']);

Route::get('/cart', [CartController::class, 'getCartTable']);
