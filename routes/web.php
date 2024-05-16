<?php

use Illuminate\Support\Facades\Route;

Route::get('/', \App\Livewire\Home::class)->name('home');

Route::prefix('auth')->group(function(){
    Route::middleware('guest')->group(function(){
        Route::get('register', \App\Livewire\Auth\Register::class)->name('register');
        Route::get('login', \App\Livewire\Auth\Login::class)->name('login');
        Route::get('forget-password', \App\Livewire\Auth\ForgetPassword::class)->name('forget-password');
        Route::get('reset-password', \App\Livewire\Auth\Reset::class)->name('reset-password');
    });
    Route::middleware('auth')->group(function(){
        Route::delete('logout', \App\Http\Controllers\Auth\LogoutController::class)->name('logout');
    });
});

Route::prefix('posts')->group(function(){
    Route::get('/', \App\Livewire\Posts\PostList::class)->name('posts.index');
//    Route::get('create', \App\Livewire\Posts\Create::class)->name('posts.create');
//    Route::get('edit/{post}', \App\Livewire\Posts\Edit::class)->name('posts.edit');
});
Route::prefix('categories')->group(function(){
    Route::get('/', \App\Livewire\Categories\CategoryList::class)->name('categories.index');
//    Route::get('create', \App\Livewire\Posts\Create::class)->name('posts.create');
//    Route::get('edit/{post}', \App\Livewire\Posts\Edit::class)->name('posts.edit');
});
Route::prefix('users')->group(function(){
    Route::get('/', \App\Livewire\Users\UserList::class)->name('users.index');
//    Route::get('create', \App\Livewire\Posts\Create::class)->name('posts.create');
//    Route::get('edit/{post}', \App\Livewire\Posts\Edit::class)->name('posts.edit');
});
