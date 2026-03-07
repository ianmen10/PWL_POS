<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LevelController extends Controller
{
   public function index()
{
    // Ambil semua data dari tabel m_level
    $data = DB::table('m_level')->get();
    
    // Kirim data ke view
    return view('level', ['data' => $data]);
}
}