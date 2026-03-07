<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk LevelController (DB Facade)
Route::get('/level', [LevelController::class, 'index']);

// Route untuk KategoriController (Query Builder)
Route::get('/kategori', [KategoriController::class, 'index']);