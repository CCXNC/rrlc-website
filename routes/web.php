<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\JobController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RrlcHomeController;
use App\Http\Controllers\HomeHeaderController;
//use App\Http\Middleware\LogRequest;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/contactus', [HomeController::class, 'contactus'])->name('contactus');
Route::get('/animalhealth', [HomeController::class, 'animalhealth'])->name('animalhealth');
Route::get('/animalnutrition', [HomeController::class, 'animalnutrition'])->name('animalnutrition');
Route::get('/animalnutrition1', [HomeController::class, 'animalnutrition1'])->name('animalnutrition1');
Route::get('/showproduct', [HomeController::class, 'showproduct'])->name('showproduct');

Route::get('/tolling', [HomeController::class, 'tolling'])->name('tolling');
Route::get('/rawmats', [HomeController::class, 'rawmats'])->name('rawmats');
Route::get('/technicalservices', [HomeController::class, 'technicalservices'])->name('technicalservices');
Route::get('/articles', [HomeController::class, 'articles'])->name('articles');
Route::get('/article/{id}', [HomeController::class, 'article'])->name('article');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/newsletter', [HomeController::class, 'newsletter'])->name('newsletter');
Route::get('/careers', [HomeController::class, 'careers'])->name('careers');
Route::get('/careers/create', [HomeController::class, 'careerform'])->name('careerform');

// BACK END ROUTES
Route::get('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/dashboard/home', [RrlcHomeController::class, 'index'])->name('dashboard.home');
Route::resource('home_carousel', HomeHeaderController::class)->middleware('auth')->only(['store','create', 'edit', 'update', 'destroy']);

/*Route::resource('jobs', JobController::class)->middleware('auth')->only(['create', 'edit', 'update', 'destroy']);
Route::resource('jobs', JobController::class)->except(['create', 'edit', 'update', 'destroy']);

Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'register'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
    Route::get('/login', [LoginController::class, 'login'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate'])->name('login.authenticate');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');*/