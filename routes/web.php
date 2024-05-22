<?php

use App\Mail\SeriesCreated;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/email', function () {
    return new SeriesCreated(
        'Series Created',
        1,
        2,
        8
    );
});


require __DIR__ . '/auth.php';
