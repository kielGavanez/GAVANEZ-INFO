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
Route::middleware('guest')->group(function(){
    Route::get('/register', [\App\Http\Controllers\AuthController::class, 'register'])->name('register');
    Route::post('/register', [\App\Http\Controllers\AuthController::class, 'store']);
    Route::get('/login', [\App\Http\Controllers\AuthController::class, 'login'])->name('login');
    Route::post('/login', [\App\Http\Controllers\AuthController::class, 'loginProcess']);
});

Route::middleware('auth')->group(function(){
    Route::get('/',[App\Http\Controllers\DashboardController::class, 'index'])->name('index');
    Route::get('/{user}',[App\Http\Controllers\DashboardController::class, 'deleteUser'])->name('delete');     
    Route::post('/',[\App\Http\Controllers\AuthController::class, 'logout']);   
});
