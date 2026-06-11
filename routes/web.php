<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('index');
// Route::get('/about', [WebsiteController::class, 'about'])->name('about');
// Route::get('/gallery', [WebsiteController::class, 'gallery'])->name('gallery');
// Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
// Route::get('/services', [WebsiteController::class, 'services'])->name('services');
// Route::get('/news', [WebsiteController::class, 'news'])->name('news');
// Route::get('/staff', [WebsiteController::class, 'staff'])->name('staff');

// Auth routes
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');
