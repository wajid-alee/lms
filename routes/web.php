<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;

Route::get('/', [WebsiteController::class, 'index'])->name('index');
route::get('/about', [WebsiteController::class, 'about'])->name('about');
route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
route::get('/services', [WebsiteController::class, 'services'])->name('services');
route::get('/news', [WebsiteController::class, 'news'])->name('news');
route::get('/staff', [WebsiteController::class, 'staff'])->name('staff');
