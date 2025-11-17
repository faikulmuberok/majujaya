<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;

// Home
Route::get('/', function () {
    return view('home');
})->name('home');

// About
Route::get('/tentang-kami', function () {
    return view('about');
})->name('about');

// Products
Route::resource('products', ProductController::class);

// Articles
Route::resource('articles', ArticleController::class);

// Contact
Route::get('/kontak', [ContactController::class, 'index'])->name('contact');
Route::post('/kontak', [ContactController::class, 'submit'])->name('contact.submit');

// Auth::routes();