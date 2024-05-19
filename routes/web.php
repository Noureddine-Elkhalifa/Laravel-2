<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/stagToPhone',[TestController::class,'addStagiaireToPhone']) -> name('linkStagToPhone');