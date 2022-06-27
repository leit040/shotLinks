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


Route::post('/',[\App\Http\Controllers\LinkController::class,'store'])->name('createLink');
Route::get('/',[\App\Http\Controllers\LinkController::class,'create'])->name('create');
Route::get('/follow/{token}',[\App\Http\Controllers\LinkController::class,'followLink'])->name('follow');
