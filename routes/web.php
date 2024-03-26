<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\searchController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('connetionTest');
});



Route::resource('articles',ArticleController::class);

Route::get('search',searchController::class) -> name('search');

