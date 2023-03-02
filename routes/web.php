<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\HomeController@Home');
Route::get('product', 'App\Http\Controllers\HomeController@product_list');
Route::get('profile', 'App\Http\Controllers\HomeController@profile');
