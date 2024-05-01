<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('auth')->group(function(){
    Route::get('register', \App\Livewire\Auth\Register::class)->name('register');
//    Route::get('login', \App\Livewire\Auth\Register::class)->name('login');
});
