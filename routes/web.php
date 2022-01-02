<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home')->middleware('verified');
Route::view('profile/edit', 'profile.edit')->middleware('auth');
Route::view('profile/change-password', 'profile.change-password')->middleware('auth');
