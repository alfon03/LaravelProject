<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::view('/about', 'aboutUs')->name('about');

Route::get('productos', [ProductController::class, 'index'])->name('productos.index');
Route::get('productos/create', [ProductController::class, 'create'])->name('productos.create');
Route::get('productos/{product}', [ProductController::class, 'show'])->name('productos.show');
Route::get('productos/{product}/edit', [ProductController::class, 'edit'])->name('productos.edit');
Route::post('productos', [ProductController::class, 'store'])->name('productos.store');
Route::patch('productos/{product}', [ProductController::class, 'update'])->name('productos.update');
Route::delete('productos/{product}', [ProductController::class, 'destroy'])->name('productos.destroy');
