<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use Nette\Utils\Image;
use App\Http\Controllers\SignUpController;
use Illuminate\Support\Facades\Auth;

Route::get('/', [MainController::class, 'home'])->name('home');
Route::get('/signup', [SignUpController::class, 'signup']);
Route::post('/signup/check', [SignUpController::class, 'signupCheck']);
Route::get('/username', function () {
    $name = Auth::user()->name;
    return ($name);
});
Route::get('/welcome', function () {
    return view('welcome');
});
