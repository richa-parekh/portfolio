<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/services', function () {
    return view('pages.services');
});

Route::get('/portfolio', [PortfolioController::class, 'index']);

Route::get('/about', function () {
    return view('pages.about');
});

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store'])
    ->name('contact.store');