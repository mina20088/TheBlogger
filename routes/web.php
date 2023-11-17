<?php

use App\Http\Controllers\ActiveLoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PasswordRestController;
use App\Http\Controllers\PasswordRestingController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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

Route::get('/forget_password',[PasswordRestController::class,'create'])->name('password-reset.create');

Route::post('/forget_password',[PasswordRestController::class,'store'])->name('password-reset.store');

Route::get('/reset-password/{email}/{token}', [PasswordRestingController::class,'create'] )->name('password.reset');

Route::post('/reset-password', [PasswordRestingController::class,'store'] )->name('password.update');


Route::middleware(['auth'])->group(function(){

    Route::get('/logout', LogoutController::class)->name('logout');

    Route::get('/dashboard', DashboardController::class)->middleware('verified')->name('dashboard');

    Route::get('/session/active',[SessionsController::class,'index'])->name('sessions.index');

    Route::get('/session/logins',[ActiveLoginController::class,'index'])->name('active-login.index.index');

});


Route::get('/verify',function()
{
    return view('verification.notice',['title'=>'Verification Notice']);
})->middleware('auth')->name('verification.notice');

Route::get('verify/{id}/{hash}',function(EmailVerificationRequest $request){

})->middleware(['auth','signed'])->name('verification.verify');
