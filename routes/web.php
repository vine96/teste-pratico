<?php

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

Route::get('/', [App\Http\Controllers\PagesController::class, 'index'])->name('index');

Auth::routes();

// Banner routes
Route::get('/banner', [App\Http\Controllers\PagesController::class, 'indexBanner'])->name('banner');
Route::post('/salvar-nav', [App\Http\Controllers\PagesController::class, 'saveNavbar'])->name('saveNavbar');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
