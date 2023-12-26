<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('autor', App\Http\Controllers\AutorController::class, ['name' => 'autor.']);
Route::resource('assunto', App\Http\Controllers\AssuntoController::class, ['name' => 'assunto.']);