<?php

use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\ServiceController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layouts.frontend');
// });

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';

Route::get('/', [FrontendController::class,'frontend'])->name('frontend.home');
Route::get('/about-us', [FrontendController::class,'about'])->name('frontend.about-us');

// frontend route start here
Route::get('/services', [ServiceController::class,'services'])->name('frontend.services');
Route::get('/services-details', [ServiceController::class,'service_details'])->name('frontend.service_details');
// frontend route start here

Route::get('/contact', [FrontendController::class,'contact'])->name('frontend.contact');

