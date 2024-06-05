<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', DashboardController::class)->name('dashboard');
Route::get('/dashboard/clients', [DashboardController::class, 'clients'])->name('dashboard.clients');
Route::get('/dashboard/client/register', [DashboardController::class, 'register'])->name('dashboard.register.client');
Route::get('/profile', ProfileController::class)->name('profile');
