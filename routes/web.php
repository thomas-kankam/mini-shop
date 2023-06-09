<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RacerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RevenueController;
use App\Http\Controllers\PermissionController;

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

Route::get('/users', [UserController::class, 'index'])->name('users');
Route::get('/table', [UserController::class, 'displayData'])->name('table');
Route::get('/get-orders', [UserController::class, 'getOrders'])->name('get-orders');

Route::get('/', [UserController::class, 'dashboard'])->name('home');
