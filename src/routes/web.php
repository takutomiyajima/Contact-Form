<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SearchController;

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

Route::get('/', [ContactController::class, 'index']);
Route::get('/confirm', [ContactController::class, 'confirm']);
Route::post('/thanks', [ContactController::class, 'store']);

Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login'); 
Route::post('/login', [AdminController::class, 'login']); 
Route::get('/register', [AdminController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AdminController::class, 'register']);
Route::post('/logout', [AdminController::class, 'logout'])->name('logout');

Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard')->middleware('auth');
Route::post('/search', [SearchController::class, 'search'])->middleware('auth');
Route::post('/export', [UserController::class, 'export'])->middleware('auth');
