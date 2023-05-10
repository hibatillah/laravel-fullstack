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

Route::resource('/formulir', App\Http\Controllers\FormulirController::class);

Route::resource('/artikel', App\Http\Controllers\ArtikelController::class);

Route::get('/layout', function() {
    return view('layout.home');
});

Route::get('/', function() {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');