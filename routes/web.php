<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\articleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/',[UserAuthController::class,'login']);
Route::get('reg',[UserAuthController::class,'register']);
Route::post('create',[UserAuthController::class,'create'])->name('auth.create');
Route::post('check',[UserAuthController::class,'check'])->name('auth.check');
Route::get('articles',[UserAuthController::class,'articles']);
Route::get('logout',[UserAuthController::class,'logout']);

////////////////////////////////////////////////////////////////////////////////
/********************Article****************/

// Route::get('article',[articleController::class,'article']);
/* insert */
//Insert Data
// Route::post('article/insert',[articleController::class,'articleinsert']);
Route::get('article',[articleController::class,'display']);
Route::post('create/article',[articleController::class,'createarticle'])->name('article.create');
Route::get('articles',[articleController::class,'getarticle']);
Route::get('articles/{id}',[articleController::class,'getarticleById']);
Route::get('delete/articles/{id}',[articleController::class,'deleteArticle']);

Route::get('/article/edit/{id}',[articleController::class,'editArticle']);
Route::post('/editarticle',[articleController::class,'updateArticle'])->name('editarticle');







