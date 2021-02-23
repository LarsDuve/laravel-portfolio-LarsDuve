<?php

use App\Http\Controllers\GradeController;
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

Route::resource('/dashboard', GradeController::class);

Route::resource('/articles', ArticlesController::class);

Route::resource('/faqs', FaqController::class);
