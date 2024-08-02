<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\RegisterController;

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/', [RegisterController::class,'login']);

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/excel', [ExcelController::class, 'index'])->name('excel');
Route::get('/product',[ProductController::class, 'index'])->name('product');
Route::post('/product/add',[ProductController::class, 'store'])->name('product.add');
Route::get('profile',[HomeController::class, 'profile'])->name('profile');
Route::get('company',[HomeController::class, 'company'])->name('company');
Route::post('add.company',[HomeController::class, 'addcompany'])->name('addcompany');
Route::get('entity',[HomeController::class, 'entity'])->name('entity');
Route::post('add-entity',[HomeController::class, 'addentity'])->name('addentity');
Route::post('/adduser',[HomeController::class, 'adduser'])->name('adduser');
Route::get('/user',[HomeController::class, 'user'])->name('user');
