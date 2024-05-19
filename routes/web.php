<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\CalculController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ControlController;
use App\Http\Controllers\ElevesController;
use App\Http\Controllers\EquipeController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ModulesController;
use App\Http\Controllers\PersonneController;
use App\Http\Controllers\ProjetController;
use App\Models\Client;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get("/articles/search",[ArticlesController::class,"search"])->name("articles.search");
Route::post("/articles/find",[ArticlesController::class,"find"])->name('articles.find');
Route::resource("articles",ArticlesController::class);

Route::get('/client',[ClientController::class,'index']);
Route::get('/clientsDetails/{id}',[ClientController::class,'show']) -> name('clientsDetails');
Route::get('/commandeDetails/{id}',[CommandeController::class,'getCommandeDetails']) -> name('commandeDetails');


// Route::resource("articles",ArticleController::class);
// Route::post('/search', [ArticleController::class, 'search'])->name('search');
// Route::get('/search', [ArticleController::class, 'showSearchForm'])->name('search.form');