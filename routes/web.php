<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Livewire\Dashboard;
use App\Livewire\Session\Show;
use App\Models\Session;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

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


Route::get('/',[HomeController::class,'index'])->name('Home.index');

Route::middleware(['auth','verified'])->group(function(){
    Route::get('/dashboard',Dashboard::class)->name('dashboard');
    Route::get('/sessions',Show::class)->name('sessions');
});

// Route::get('/dashboard', function () {
//     return view('dashboard',['sessions'=> Session::all()]);
// });

Route::middleware('auth')->group(function () {
    Route::get('/profile/{user:username}',[ProfileController::class,'index'])->name('profile.index');
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
