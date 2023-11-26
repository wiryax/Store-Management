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

Route::view('/', 'welcome');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');
Route::get('/product', [\App\Http\Controllers\ProductController::class, 'findAll'])->middleware(['auth', 'verified']);

Route::get('/product/delete/{id}', [\App\Http\Controllers\ProductController::class, 'delete'])->middleware(['auth', 'verified']);

Route::get('/product/add', [\App\Http\Controllers\ProductController::class, 'addProduct'])->middleware(['auth', 'verified']);

Route::post('/product/insert',[\App\Http\Controllers\ProductController::class, 'insert'])->middleware(['auth', 'verified']);

require __DIR__.'/auth.php';

