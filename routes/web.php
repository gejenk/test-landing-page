<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;

Route::get('/', [LandingPageController::class, 'index'])->name('home');
Route::post('/contact', [LandingPageController::class, 'submitContact'])->name('contact.submit');
Route::post('/newsletter', [LandingPageController::class, 'subscribeNewsletter'])->name('newsletter.subscribe');