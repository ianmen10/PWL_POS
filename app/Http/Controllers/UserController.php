<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
   public function index()
{
    // Ambil data user dengan ID 1
    $user = UserModel::find(1);
    
    // Ubah atribut
    $user->username = 'admin_changed';
    $user->nama = 'Administrator Changed';
    
    // Simpan perubahan ke database
    $user->save();
    
    // Cek apakah ada perubahan setelah disimpan
    if ($user->wasChanged()) {
        echo "Data BERHASIL diubah! <br>";
        echo "Kolom yang berubah saat penyimpanan: <br>";
        
        // Tampilkan kolom yang berubah
        $changes = $user->getChanges();
        foreach ($changes as $column => $newValue) {
            echo "- $column: '$newValue' <br>";
        }
    } else {
        echo "Tidak ada perubahan yang disimpan.";
    }
    
    // Cek kolom tertentu
    echo "<hr>";
    echo "Apakah username berubah? " . ($user->wasChanged('username') ? 'Ya' : 'Tidak') . "<br>";
    echo "Apakah nama berubah? " . ($user->wasChanged('nama') ? 'Ya' : 'Tidak') . "<br>";
    echo "Apakah level_id berubah? " . ($user->wasChanged('level_id') ? 'Ya' : 'Tidak') . "<br>";
    
    return;
}

public function attributeChanges()
{
    // Praktikum 2.5 - Attribute Changes
    $user = UserModel::find(1);
    
    echo "<h1>Praktikum 2.5 - Attribute Changes</h1>";
    
    // isDirty() - Sebelum disimpan
    echo "<h2>1. isDirty() - Sebelum disimpan</h2>";
    $user->username = 'admin_dirty';
    if ($user->isDirty()) {
        echo "Data berubah: " . json_encode($user->getDirty()) . "<br>";
    }
    
    // isClean() - Sebelum disimpan
    echo "<h2>2. isClean() - Sebelum disimpan</h2>";
    echo "Apakah username bersih? " . ($user->isClean('username') ? 'Ya' : 'Tidak') . "<br>";
    
    // Simpan perubahan
    $user->save();
    
    // wasChanged() - Setelah disimpan
    echo "<h2>3. wasChanged() - Setelah disimpan</h2>";
    if ($user->wasChanged()) {
        echo "Data berhasil diubah: " . json_encode($user->getChanges()) . "<br>";
    }
    
    return;
}
}