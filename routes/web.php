<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('menu', MenuController::class);
Route::resource('posts', PostController::class);