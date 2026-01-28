<?php

use App\Http\Controllers\Auth\login;
use App\Http\Controllers\Auth\logout;
use App\Http\Controllers\ChirpController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $posts = Post::latest()->get();

    return view('home', [
        'posts' => $posts,
    ]);
});

// Auth
Route::get('/register', [UserController::class, 'create'])->middleware('guest');
Route::post('/register', [UserController::class, 'store'])->middleware('guest');
Route::view('/login', 'auth.login')->middleware('guest');
Route::post('/login', login::class)->middleware('guest');
Route::post('/logout', logout::class)->middleware('auth');

// Chirps
Route::get('/chirps/create', [ChirpController::class, 'create']);
Route::post('/chirps', [ChirpController::class, 'store']);
Route::get('/chirps/{chirp}/edit', [ChirpController::class, 'edit']);
Route::patch('/chirps/{chirp}', [ChirpController::class, 'update']);
Route::delete('/chirps/{chirp}', [ChirpController::class, 'destroy']);

// Posts
Route::resource('posts', PostController::class);
