<?php

use App\Http\Controllers\Auth\ChangePasswordController;
use App\Http\Controllers\Auth\ForgetPasswordController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\ProfileController;
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


Route::middleware(['guest'])->group(function () {
    // For login-register
    Route::get('/login-register', function () {
        return view('auth.login-register');
    })->name('login-register');

    // For login
    Route::post('/login', [LoginController::class, 'login'])->name('login');

    // For register
    Route::post('/register', [RegisterController::class, 'register'])->name('register');

    // For forget password
    Route::post('/forget-password', [ForgetPasswordController::class, 'forgetPassword'])->name('forget_password');
});


Route::middleware(['auth'])->group(function () {
    // Default route -- not used
    Route::get('/', function () {
        return view('welcome');
    });

    // For home
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    // For profile
    Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
    // For update profile
    Route::post('/profile/update', [ProfileController::class, 'update'])->name('profile.update');
    // For password change
    Route::post('/change-password', [ChangePasswordController::class, 'changePassword'])->name('change_password');
    // For logout
    Route::get('/logout', [LogoutController::class, 'logout'])->name('logout');
});