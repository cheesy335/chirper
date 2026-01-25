<?php

use App\Http\Controllers\ChirpController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get("/", function () {
    return view("home");
});

// Auth
Route::get("/register", [UserController::class, "create"]);
Route::post("/register", [UserController::class, "store"]);
// Route::get("/login", [UserController::class, "create"]);

Route::post('/chirps', [ChirpController::class, 'store']);