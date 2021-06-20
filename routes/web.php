<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\GradeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\UserAuthController;
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

Route::resource('/dashboard', CourseController::class);
//Route::resource('/dashboard', GradeController::class);

Route::resource('/articles', ArticleController::class);


//Route::resource('/faqs', FaqController::class);

Route::get('faqs/create', [FaqController::class, 'create'])->middleware('isLogged');
Route::post('faqs', [FaqController::class, 'store']);
//READ
Route::get('faqs', [FaqController::class, 'index']);
//UPDATE
Route::get('faqs/{faq}/edit', [FaqController::class, 'edit'])->middleware('isLogged');
Route::put('faqs/{faq}', [FaqController::class, 'update']);
//DELETE
Route::delete('faqs/{faq}', [FaqController::class, 'destroy'])->middleware('isLogged');


Route::get('login', [UserAuthController::class, 'login'])->middleware('alreadyLoggedIn');
Route::get('register', [UserAuthController::class, 'register'])->middleware('alreadyLoggedIn');
Route::post('create', [UserAuthController::class, 'create'])->name('auth.create');
Route::post('check', [UserAuthController::class, 'check'])->name('auth.check');
Route::get('profile', [UserAuthController::class, 'profile'])->middleware('isLogged');
Route::get('logout', [UserAuthController::class, 'logout']);
