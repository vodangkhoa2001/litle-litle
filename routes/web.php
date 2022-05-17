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

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::get('/payment', function () {
    return view('payment');
})->name('payment');
Route::get('/event', function () {
    return view('event');
})->name('event');
Route::get('/event-detail', function () {
    return view('event-detail');
})->name('event-detail');
Route::get('/payment-succes', function () {
    return view('payment-succes');
})->name('payment-success');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
