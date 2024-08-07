<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DirectorController;
use App\Http\Controllers\MovieController;

// Routes pour les réalisateurs (Directors)
Route::resource('directors', DirectorController::class);

// Routes pour les films (Movies)
Route::resource('movies', MovieController::class);
