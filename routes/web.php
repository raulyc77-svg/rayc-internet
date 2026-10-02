<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');

Route::get('/planes/50-mbps', function () {
    return view('planes.50');
});

Route::get('/planes/100-mbps', function () {
    return view('planes.100');
});

Route::get('/planes/150-mbps', function () {
    return view('planes.150');
});