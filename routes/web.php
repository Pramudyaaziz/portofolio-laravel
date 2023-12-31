<?php

use Illuminate\Auth\Events\Logout;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\authController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\halamanController;
use App\Http\Controllers\educationController;
use App\Http\Controllers\experienceController;
use App\Http\Controllers\pengaturanHalamanController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\skillController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::redirect('home', 'dashboard', 301);

Route::get('/auth',[authController::class, "index"])->name('login')->middleware('guest');
Route::get('/auth/redirect',[authController::class, "redirect"])->middleware('guest');
Route::get('/auth/logout',[authController::class, "logout"]);

Route::get('/auth/callback',[authController::class, "callback"])->middleware('guest');

Route::prefix('dashboard')->middleware('auth')->group(
    function (){
        Route::get('/',[halamanController::class, "index"]);
        Route::resource('halaman', halamanController::class);
        Route::resource('experience', experienceController::class);
        Route::resource('education', educationController::class);
        Route::get('skill',[skillController::class, "index"])->name('skill.index');
        Route::post('skill',[skillController::class, "update"])->name('skill.update');
        Route::get('profile',[profileController::class, "index"])->name('profile.index');
        Route::post('profile',[profileController::class, "update"])->name('profile.update');
        Route::get('pengaturanhalaman',[pengaturanHalamanController::class, "index"])->name('pengaturanhalaman.index');
        Route::post('pengaturanhalaman',[pengaturanHalamanController::class, "update"])->name('pengaturanhalaman.update');
    }
    );
