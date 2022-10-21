<?php

use App\Http\Controllers\Dashboard\DashboardVehiculeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\VehiculeController;
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
Route::get('/contact', function () {return view('contact');})->name('contact');

Route::resource('messages', MessageController::class);

Route::resource('vehicules', VehiculeController::class);

Route::get('/dashboard', function () {return view('dashboard/index');})->middleware(['auth'])->name('dashboard');
Route::get('/dashboard/messages', [MessageController::class, "index"])->middleware(['auth'])->name('dashboard-messages');
Route::get('/dashboard/vehicules', [DashboardVehiculeController::class,'index'])->middleware(['auth'])->name('dashboard-vehicules');

require __DIR__.'/auth.php';
