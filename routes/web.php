<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $products = config('products');
    // @dd($products);

    return view('home', compact('products'));
})->name('home');

Route::get('/uomo', function () {
    return view('uomo');
})->name('uomo');

Route::get('/donna', function () {
    return view('donna');
})->name('donna');

Route::get('/bambino', function () {
    return view('bambino');
})->name('bambino');
