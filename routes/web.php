<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', [HomeController::class, 'Home'])->name('home');
Route::get('/page1', [HomeController::class, 'Page1'])->name('page1');
Route::get('/page2', [HomeController::class, 'Page2'])->name('page2');
Route::get('/page3', [HomeController::class, 'Page3'])->name('page3');
Route::get('/page4', [HomeController::class, 'Page4'])->name('page4');
Route::get('/page5', [HomeController::class, 'Page5'])->name('page5');

Route::post('/PostBackRequest', [HomeController::class, 'PostBackRequest'])->name('PostBackRequest');
Route::post('/UploadRequest', [HomeController::class, 'UploadRequest'])->name('UploadRequest');