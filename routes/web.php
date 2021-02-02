<?php

use App\Http\Controllers\WelcomeController;;

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
Route::get('/faq', [WelcomeController::class, 'faq']);
Route::get('/motivation', [WelcomeController::class, 'motivation']);
Route::get('/professions', [WelcomeController::class, 'professions']);
Route::get('/profile', [WelcomeController::class, 'profile']);
Route::get('/dashboard', [WelcomeController::class, 'dashboard']);
