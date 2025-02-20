<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\LoginController;
//use App\Http\Controllers\RegisterController;
//use App\Http\Middleware\LogRequest;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/ourproducts', [HomeController::class, 'ourproducts'])->name('ourproducts');
Route::get('/technicalservices', [HomeController::class, 'technicalservices'])->name('technicalservices');
Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
Route::get('/article/{id}', [HomeController::class, 'article'])->name('article');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
/*Route::resource('jobs', JobController::class)->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
Route::resource('jobs', JobController::class)->except(['create', 'edit', 'update', 'destroy']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');*/