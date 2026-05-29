<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\MyAppController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return 'Halaman Dashboard';
})->name('dashboard');

Route::get('/produk/{id}', function ($id) {
    return 'Produk ID: ' . $id;
});

Route::get('/products', [ProductController::class, 'index']);
Route::get('/student', [StudentController::class, 'index']);
Route::get('/myapp', [MyAppController::class, 'index']);
