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

    // Profile routes
    Route::prefix('/perfil')->group(function () {
        Route::get('/', [App\Http\Controllers\UserController::class, 'indexProfile'])->name('indexProfile');
        Route::post('/salvar', [App\Http\Controllers\UserController::class, 'saveProfile'])->name('saveProfile');
    });

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
        Route::post('/salvar-imagens', [App\Http\Controllers\ImagesController::class, 'saveFirstcardImages'])->name('saveFirstcardImages');
        Route::get('/excluir/{id}', [App\Http\Controllers\ImagesController::class, 'delImageFirst'])->name('delImageFirst');
        Route::get('/download/{id}', [App\Http\Controllers\ImagesController::class, 'downImageFirst'])->name('downImageFirst');
    });

    // Secondcard routes
    Route::prefix('/segundo-card')->group(function () {
        Route::get('/', [App\Http\Controllers\PagesController::class, 'indexSecondcard'])->name('indexSecondcard');
        Route::post('/salvar', [App\Http\Controllers\PagesController::class, 'saveSecondcard'])->name('saveSecondcard');
        Route::post('/salvar-imagem', [App\Http\Controllers\ImagesController::class, 'saveSecondcardImage'])->name('saveSecondcardImage');
    });

    // Infocard routes
    Route::prefix('/informacoes')->group(function () {
        Route::get('/', [App\Http\Controllers\PagesController::class, 'indexInfocard'])->name('indexInfocard');
        Route::post('/salvar', [App\Http\Controllers\PagesController::class, 'saveInfocard'])->name('saveInfocard');
        Route::post('/salvar-imagem', [App\Http\Controllers\ImagesController::class, 'saveInfocardImage'])->name('saveInfocardImage');
    });

    // Contactcard routes
    Route::prefix('/contato')->group(function () {
        Route::get('/', [App\Http\Controllers\PagesController::class, 'indexContactcard'])->name('indexContactcard');
        Route::post('/salvar', [App\Http\Controllers\PagesController::class, 'saveContactcard'])->name('saveContactcard');
        Route::post('/enviar-email', [App\Http\Controllers\PagesController::class, 'sendEmail'])->name('sendEmail');
    });

});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
