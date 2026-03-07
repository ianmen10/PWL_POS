<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;


Route::get('/', function () {
    return view('welcome');
});

// Route untuk LevelController
Route::get('/level', [LevelController::class, 'index']);