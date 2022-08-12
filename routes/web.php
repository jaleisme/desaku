<?php

use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HunianController;
use App\Http\Controllers\PendudukController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [HomeController::class, 'landing']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::resource('/penduduk', PendudukController::class)->middleware('auth');
Route::resource('/hunian', HunianController::class)->middleware('auth');
Route::resource('/fasilitas', FasilitasController::class)->middleware('auth');
