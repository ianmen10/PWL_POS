<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
{
    // firstOrNew lalu di-save
    $user = UserModel::firstOrNew(
        ['username' => 'kasir_utama'],  // Kriteria pencarian
        [
            'nama' => 'Kasir Utama',
            'level_id' => 3,
            'password' => bcrypt('12345')
        ]
    );
    
    // Simpan ke database jika ini adalah object baru
    if (!$user->exists) {
        $user->save();
        $status = "Data baru berhasil disimpan";
    } else {
        $status = "Data sudah ada";
    }
    
    return view('user', [
        'data' => $user,
        'status' => $status
    ]);
}
}