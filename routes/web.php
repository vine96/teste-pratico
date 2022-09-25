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

Route::middleware('auth')->group(function () {

    // Banner routes
    Route::prefix('/banner')->group(function () {
        Route::get('/', [App\Http\Controllers\PagesController::class, 'indexBanner'])->name('banner');
        Route::post('/salvar-nav', [App\Http\Controllers\PagesController::class, 'saveNavbar'])->name('saveNavbar');
        Route::post('/salvar-banner', [App\Http\Controllers\PagesController::class, 'saveBanner'])->name('saveBanner');
        Route::post('/salvar-centerbar', [App\Http\Controllers\PagesController::class, 'saveCenterbar'])->name('saveCenterbar');
    });

    // Firstcard routes
    Route::prefix('/primeiro-card')->group(function () {
        Route::get('/', [App\Http\Controllers\PagesController::class, 'indexFirstcard'])->name('indexFirstcard');
        Route::post('/salvar', [App\Http\Controllers\PagesController::class, 'saveFirstcard'])->name('saveFirstcard');
        Route::post('/salvar-imagens', [App\Http\Controllers\PagesController::class, 'saveFirstcardImages'])->name('saveFirstcardImages');
        Route::get('/excluir/{id}', [App\Http\Controllers\PagesController::class, 'delImageFirst'])->name('delImageFirst');
        Route::get('/download/{id}', [App\Http\Controllers\PagesController::class, 'downImageFirst'])->name('downImageFirst');
    });

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
