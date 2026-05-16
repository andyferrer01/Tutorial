<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\TeacherController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sample', function () {
    return 'This is a sample route.';
});

Route::resource('books', BookController::class);
Route::resource('products', ProductController::class);
Route::resource('teachers', TeacherController::class);
