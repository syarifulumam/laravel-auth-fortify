<?php

use Illuminate\Support\Facades\Route;


Route::view('/', 'home')->name('home')->middleware('auth');
