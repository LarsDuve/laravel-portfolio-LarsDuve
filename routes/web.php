<?php

use App\Http\Controllers\PostsController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\FaqController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [WelcomeController::class, 'show']);

Route::get('/motivation', [WelcomeController::class, 'motivation']);

Route::get('/profile', [WelcomeController::class, 'profile']);

Route::get('/dashboard', [WelcomeController::class, 'dashboard']);

// CREATE
Route::get('/articles/create', [ArticlesController::class, 'create']);
Route::post('/articles', [ArticlesController::class, 'store']);
// READ
Route::get('/articles', [ArticlesController::class, 'index']);
Route::get('/articles/{article}', [ArticlesController::class, 'show']);
// UPDATE
Route::get('/articles/{article}/edit', [ArticlesController::class, 'edit']);
Route::put('/articles/{article}', [ArticlesController::class, 'update']);
// DELETE
Route::delete('/articles/{article}', [ArticlesController::class, 'destroy']);

// CREATE
Route::get('/faqs/create', [FaqController::class, 'create']);
Route::post('/faqs', [FaqController::class, 'store']);
// READ
Route::get('/faqs', [FaqController::class, 'index']);
Route::get('/faqs/{faq}', [FaqController::class, 'show']);
// UPDATE
Route::get('/faqs/{faq}/edit', [FaqController::class, 'edit']);
Route::put('/faqs/{faq}', [FaqController::class, 'update']);
// DELETE
Route::delete('/faqs/{faq}', [FaqController::class, 'destroy']);
