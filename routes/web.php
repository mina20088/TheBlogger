<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Category;
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

Route::get('/',[HomeController::class,'index'])->name('home.index');

Route::get('/post/{post:slug}',[PostsController::class,'show'])->name('posts.show');

Route::get('/category/{category:slug}',[CategoryController::class,'index'])->name('category.index');

Route::get('/user/{user:username}',[UserController::class,'index'])->name('user.index');

Route::get('/login', [LoginController::class,'create'])->name('login.create');

Route::post('/login',[LoginController::class,'store'])->name('login.store');

Route::get('/register',[RegisterController::class,'create'])->name('register.create');

Route::post('/register',[RegisterController::class,'store'])->name('register.store');

Route::get('/dashboard', DashboardController::class)->name('dashboard');
