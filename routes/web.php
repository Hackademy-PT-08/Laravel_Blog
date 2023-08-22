<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ArticleController;

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

//ROTTA HOMEPAGE
Route::get('/', [HomeController::class, 'index'])
->name('index');

//PROFILO UTENTE
Route::get('/profilo', [UserController::class, 'index'])
->middleware(['auth', 'verified'])
->name('users.profile');

Route::get('/articoli-utente', [UserController::class, 'articles'])
->middleware(['auth', 'verified'])
->name('users.articles');

//ROTTE ARTICOLI

//READ
Route::get('/articoli', [ArticleController::class, 'index'])
->name('articles.index');

//CREATE 
Route::get('/articoli/aggiungi', [ArticleController::class, 'create'])
->middleware('auth')
->name('articles.create');

Route::post('/articoli/aggiungi', [ArticleController::class, 'store'])
->name('articles.store');

//UPDATE
Route::get('/articoli/modifica/{id}', [ArticleController::class, 'edit'])
->name('articles.edit');

Route::put('/articoli/modifica/{id}', [ArticleController::class, 'update'])
->name('articles.update');

//DELETE
Route::delete('/articoli/elimina/{id}', [ArticleController::class, 'destroy'])
->name('articles.destroy');

Route::get('/articoli/{id}', [ArticleController::class, 'show'])
->name('articles.show');