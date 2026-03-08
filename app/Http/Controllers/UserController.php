<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

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
}