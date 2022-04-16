<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', function () {return view('index');})->name('index');
Route::get('/services', function () {return view('services');})->name('services');
Route::get('/rendez-vous', function () {return view('rendez_vous');})->name('rdv');
Route::get('/contact', function () {return view('contact');})->name('contact');

Route::resource('messages', MessageController::class);

Route::resource('articles', ArticleController::class);

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
