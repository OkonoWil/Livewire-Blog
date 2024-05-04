<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function(){
    Route::middleware('guest')->group(function(){
        Route::get('register', \App\Livewire\Auth\Register::class)->name('register');
        Route::get('login', \App\Livewire\Auth\Login::class)->name('login');
    });
    Route::middleware('auth')->group(function(){
        Route::delete('logout', \App\Http\Controllers\Auth\LogoutController::class)->name('logout');
    });
});
