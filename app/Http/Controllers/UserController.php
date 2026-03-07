<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
   public function index()
{
    // Ambil semua data user dengan Eloquent
    $data = UserModel::all();
    
    // Kirim data ke view
    return view('user', compact('data'));
}

}