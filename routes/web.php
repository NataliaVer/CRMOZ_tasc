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

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/storeUserData', [App\Http\Controllers\UserDataController::class, 'StoreUserData']);

Route::get('/{page}', [App\Http\Controllers\HomeController::class, 'index'])->where('page', '.*');
