<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
{
    // Tambah data user dengan Eloquent
    $data = [
        'level_id' => 2,
        'username' => 'manager_empat',
        'nama' => 'Manager 4',
        'password' => bcrypt('12345') // password tetap diisi
    ];
    
    UserModel::create($data);
    
    return "Data user berhasil ditambahkan";
}
}   