<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use App\Models\LevelModel;

class UserController extends Controller
{
    // READ - Menampilkan semua data
    public function index()
    {
        $data = UserModel::all();
        return view('user', compact('data'));
    }
    
    // CREATE - Menampilkan form tambah user
    public function tambah()
    {
        return view('user_tambah');
    }
    
    // CREATE - Menyimpan data user baru
    public function tambah_simpan(Request $request)
    {
        UserModel::create([
            'level_id' => $request->level_id,
            'username' => $request->username,
            'nama' => $request->nama,
            'password' => bcrypt($request->password)
        ]);
        
        return redirect('/user')->with('success', 'Data user berhasil ditambahkan!');
    }
    
    // UPDATE - Menampilkan form ubah user
    public function ubah($id)
    {
        $user = UserModel::find($id);
        return view('user_ubah', compact('user'));
    }
    
    // UPDATE - Menyimpan perubahan data user
    public function ubah_simpan($id, Request $request)
    {
        $user = UserModel::find($id);
        
        $user->level_id = $request->level_id;
        $user->username = $request->username;
        $user->nama = $request->nama;
        
        if ($request->password) {
            $user->password = bcrypt($request->password);
        }
        
        $user->save();
        
        return redirect('/user')->with('success', 'Data user berhasil diubah!');
    }
    
    // DELETE - Menghapus data user
    public function hapus($id)
    {
        $user = UserModel::find($id);
        $user->delete();
        
        return redirect('/user')->with('success', 'Data user berhasil dihapus!');
    }
    
    // Method-method praktikum sebelumnya (bisa dipindah ke route terpisah)
    public function attributeChanges()
    {
        // ... kode dari praktikum 2.5 ...
    }

    public function relationships()
{
    // Mengambil data user beserta relasi level
    $users = UserModel::with('level')->get();
    
    // Tampilkan dalam bentuk tabel HTML sederhana
    echo "<h1>Praktikum 2.7 - Relationships</h1>";
    echo "<h2>Data User dengan Relasi Level</h2>";
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 80%;'>";
    echo "<tr style='background-color: #4CAF50; color: white;'>
            <th>User ID</th>
            <th>Username</th>
            <th>Nama</th>
            <th>Level ID</th>
            <th>Level Kode</th>
            <th>Level Nama</th>
          </tr>";
    
    foreach ($users as $user) {
        echo "<tr>";
        echo "<td>" . $user->user_id . "</td>";
        echo "<td>" . $user->username . "</td>";
        echo "<td>" . $user->nama . "</td>";
        echo "<td>" . $user->level_id . "</td>";
        echo "<td>" . $user->level->level_kode . "</td>";
        echo "<td>" . $user->level->level_nama . "</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    // Tampilkan juga data level dengan jumlah usernya
    echo "<h2>Data Level dengan Jumlah User</h2>";
    $levels = LevelModel::withCount('users')->get();
    
    echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse: collapse; width: 50%; margin-top: 20px;'>";
    echo "<tr style='background-color: #2196F3; color: white;'>
            <th>Level ID</th>
            <th>Level Kode</th>
            <th>Level Nama</th>
            <th>Jumlah User</th>
          </tr>";
    
    foreach ($levels as $level) {
        echo "<tr>";
        echo "<td>" . $level->level_id . "</td>";
        echo "<td>" . $level->level_kode . "</td>";
        echo "<td>" . $level->level_nama . "</td>";
        echo "<td>" . $level->users_count . " user</td>";
        echo "</tr>";
    }
    
    echo "</table>";
    
    return;
}

public function relationshipsView()
{
    $users = UserModel::with('level')->get();
    $levels = LevelModel::withCount('users')->get();
    
    return view('user_relationships', compact('users', 'levels'));
}
}