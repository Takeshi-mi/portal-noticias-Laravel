<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home');




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
