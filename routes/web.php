<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProductoController;


Route::get('/', function () {
    return view('welcome');
});

// Rutas para Categoria

Route::resource("/categoria", CategoriaController::class)->middleware("auth");
Route::resource("/producto", ProductoController::class);
Auth::routes(["register" => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
