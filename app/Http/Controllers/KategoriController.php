<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
public function index()
{
    // SELECT semua data dengan Query Builder
    $data = DB::table('m_kategori')->get();
    
    // Kirim data ke view
    return view('kategori', compact('data'));
}
}