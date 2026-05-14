<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return 'This is a sample route.';
});

Route::resource('books', BookController::class);
Route::resource('products', ProductController::class);