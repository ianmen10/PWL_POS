<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LevelController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// ==================== ROUTE PRAKTIKUM SEBELUMNYA ====================

// Route untuk LevelController (DB Facade) - Praktikum 4
Route::get('/level', [LevelController::class, 'index']);

// Route untuk KategoriController (Query Builder) - Praktikum 5
Route::get('/kategori', [KategoriController::class, 'index']);

// Route untuk method khusus attributeChanges - Praktikum 2.5
Route::get('/user/attribute-changes', [UserController::class, 'attributeChanges']);


// ==================== ROUTE CRUD USER (PRAKTIKUM 2.6) ====================

// READ - Menampilkan semua data user
Route::get('/user', [UserController::class, 'index']);

// CREATE - Menampilkan form tambah user
Route::get('/user/tambah', [UserController::class, 'tambah']);

// CREATE - Menyimpan data user baru
Route::post('/user/tambah_simpan', [UserController::class, 'tambah_simpan']);

// UPDATE - Menampilkan form ubah user
Route::get('/user/ubah/{id}', [UserController::class, 'ubah']);

// UPDATE - Menyimpan perubahan data user
Route::put('/user/ubah_simpan/{id}', [UserController::class, 'ubah_simpan']);

// DELETE - Menghapus data user
Route::get('/user/hapus/{id}', [UserController::class, 'hapus']);


// Route untuk Praktikum 2.7 - Relationships
Route::get('/user/relationships', [UserController::class, 'relationshipsView']);