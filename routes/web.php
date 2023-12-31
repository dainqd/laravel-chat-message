<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'dashboard'])->name('home');
Route::get('/login', [AuthController::class, 'processLogin'])->name('auth.processLogin');
Route::post('/login', [AuthController::class, 'login'])->name('auth.login');

Route::get('/chat', [HomeController::class, 'chat'])->name('home.chat');
