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
Route::get('/contact', function () {return view('contact');})->name('contact');

Route::resource('messages', MessageController::class);

Route::resource('articles', ArticleController::class);

Route::get('/dashboard', function () {return view('dashboard');})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/messages', [MessageController::class, "index"])->middleware(['auth'])->name('dashboard-messages');
Route::get('/dashboard/vehicules', [ArticleController::class,'indexDashboard'])->middleware(['auth'])->name('dashboard-articles');

require __DIR__.'/auth.php';
