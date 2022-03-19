<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//Admin Controllers
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\admin\ForumController;
use App\Http\Controllers\admin\LoginController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\DashboardController;

//Client Controllers
use App\Http\Controllers\HomeController as Home;
use App\Http\Controllers\client\AboutController as About;
use App\Http\Controllers\client\ContactController as Contact;
use App\Http\Controllers\client\ForumController as Forum;
use App\Http\Controllers\client\UserController as User;
use App\Http\Controllers\client\ServicesController as Services;


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

//Client Pages
Route::get('/',[Home::class,'index'])->name('/');
Route::get('/about',[About::class,'index'])->name('about');
Route::get('/forum_landing',[Forum::class,'index'])->name('forum_landing');
Route::get('/forum_details/{id}',[Forum::class,'forum_details'])->name('forum_details?id');
Route::get('/contact',[Contact::class,'index'])->name('contact');
Route::post('/contact',[Contact::class,'sendMessage'])->name('sendMessage');
Route::get('/signup',[User::class,'signup'])->name('signup');
Route::get('/signin',[User::class,'signin'])->name('signin');
Route::get('/services',[Services::class,'index'])->name('services');
// Route::get()->name('client_area');
Route::get('team',[About::class,'team'])->name('team');
Route::get('/profile',[User::class,'profile'])->name('profile');

// Admin Routes
Route::get('/admin', [LoginController::class,'index'])->name('admin.login');
Route::post('/admin/login', [LoginController::class,'login']);

Route::prefix('admin')->middleware(['auth','isAdmin','preventBackHistory'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/logout', [LoginController::class,'logout']);
    Route::get('/messages', [ContactController::class,'index']);
    Route::get('/users', [UserController::class,'index']);
    Route::get('/forum', [ForumController::class,'index']);
    Route::get('/forum/categories', [ForumController::class,'categories']);
});


// End Admin Routes

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
