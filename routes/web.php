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

// Frontend Route

Route::get('/',[App\Http\Controllers\PagesController::class, 'index']);

// Backend Route

Route::get('admin/deshborad',[App\Http\Controllers\PagesController::class, 'deshborad'])->name('admin.deshborad');
Route::get('admin/logo',[App\Http\Controllers\PagesController::class, 'logo'])->name('admin.logo');
Route::get('admin/hero',[App\Http\Controllers\PagesController::class, 'hero'])->name('admin.hero');


Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

