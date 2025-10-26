<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\BackendController;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//add category
Route::get('/add-category', [BackendController::class, 'addCategory'])->name('add-category');
//store category
Route::post('/store-category', [BackendController::class, 'storeCategory'])->name('store-category');
