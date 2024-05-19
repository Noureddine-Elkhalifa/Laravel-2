<?php

use App\Http\Controllers\ListFilierController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/stagToPhone',[TestController::class,'addStagiaireToPhone']) -> name('linkStagToPhone');
Route::get('/filieres',[ListFilierController::class,'listFilieres']);
Route::get('/filieres/:id',[ListFilierController::class,'detailFiliere']) -> name('filiere');