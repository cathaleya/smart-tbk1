<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('client.home');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->name('dashboard');

Route::get('/delivery-order', function () {
    return view('admin.delivery-order');
})->name('delivery-order');
Route::get('/warehouse', function () {
    return view('admin.delivery-order');
})->name('warehouse');
Route::get('/transport', function () {
    return view('admin.delivery-order');
})->name('transport');
