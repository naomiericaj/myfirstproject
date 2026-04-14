<?php

use App\Http\Controllers\FirstController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // dd('hello world');
    return view('welcome');
});

Route::get('/hi', function () {
    return 'hellooooo im am naomiiii';
})->name('hi');

Route::get('/home', [HomeController::class, 'show'])->name('home');

Route::get('/home/sum', [FirstController::class, 'sum'])->name('home.sum');

Route::get('/home/multiply/{param1}/{param2?}', [FirstController::class, 'multiply'])->name('home.multiply');

Route::get('/about', function () {
    return view('about');
})->name('about');

// Route::get('/store', function () {
//     return view('store');
// })->name('store');

Route::get('/store', [App\Http\Controllers\StoreController::class, 'show'])->name('store');