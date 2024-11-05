<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact');
});

// routes/web.php




// Route untuk Registrasi
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route untuk Login
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// Route untuk Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Route untuk halaman setelah login (misalnya dashboard atau home)
Route::get('/home', function () {
    return view('home'); // Pastikan view home.blade.php sudah ada di resources/views
})->middleware('auth')->name('home');

