<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\DashboardController;


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

Route::get('/OEAdmin/dashboard', [DashboardController::class, 'index']);
Route::get('/OEAdmin', [LoginController::class,'index']);
Route::post('/OEAdmin/login', [LoginController::class,'login']);
