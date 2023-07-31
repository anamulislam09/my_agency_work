<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts.frontend');
});

// Route::get('/home', function () {
//     return view('home');
// })->middleware(['auth'])->name('home');

require __DIR__.'/auth.php';
