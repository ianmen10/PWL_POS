<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route untuk LevelController (DB Facade)
Route::get('/level', [LevelController::class, 'index']);

// Route untuk KategoriController (Query Builder)
Route::get('/kategori', [KategoriController::class, 'index']);

// Route untuk method khusus attributeChanges
Route::get('/user/attribute-changes', [UserController::class, 'attributeChanges']);

// Route untuk method index (tetap ada)
Route::get('/user', [UserController::class, 'index']);