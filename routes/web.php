<?php

use App\Http\Controllers\Auth\login;
use App\Http\Controllers\Auth\logout;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\UserController;
use App\Models\Chirp;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $chirps = Chirp::latest()->get();

    return view('home', [
        'chirps' => $chirps,
    ]);
});

// Auth
Route::get('/register', [UserController::class, 'create']);
Route::post('/register', [UserController::class, 'store']);
Route::view('/login', 'auth.login');
Route::post('/login', login::class);
Route::post('/logout', logout::class);

Route::post('/chirps', [ChirpController::class, 'store']);
