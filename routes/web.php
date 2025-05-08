<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;



Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('client.login');
    })->name('view-login');

    Route::post('/login', [UserController::class, 'login'])->name('login');
});



Route::middleware(['auth', 'isAdmin'])->group(function () {
    Route::resource('user', UserController::class);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [UserController::class, 'logout'])->name('logout');



    Route::get('/dashboard', function () {
        return view('admin.dashboard', [
            'title' => 'Dashboard',
        ]);
    })->name('dashboard');

    Route::get('/delivery-order', function () {
        return view('sales.delivery-order', [
            'title' => 'Delivery Order',
        ]);
    })->name('delivery-order');
    Route::get('/warehouse', function () {
        return view('admin.delivery-order');
    })->name('warehouse');
    Route::get('/transport', function () {
        return view('admin.delivery-order');
    })->name('transport');
});
