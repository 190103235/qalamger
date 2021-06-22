<?php

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::get('/lenta', [\App\Http\Controllers\LentaController::class, 'lenta'])->name('lenta');
Route::get('/category/{id}', [\App\Http\Controllers\HomeController::class, 'singleCategory'])->name('single');
Route::get('/category/{id}', [\App\Http\Controllers\HomeController::class, 'x'])->name('naruto');