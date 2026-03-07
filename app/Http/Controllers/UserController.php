<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
{
    $jumlahUser = UserModel::count();
    $maxLevelId = UserModel::max('level_id');
    $minLevelId = UserModel::min('level_id');
    $avgLevelId = UserModel::avg('level_id');
    
    // Method aggregate lainnya
    $sumLevelId = UserModel::sum('level_id');  // Menjumlah semua level_id
    
    return view('user', [
        'jumlah' => $jumlahUser,
        'max' => $maxLevelId,
        'min' => $minLevelId,
        'avg' => $avgLevelId,
        'sum' => $sumLevelId  // Tambahkan sum
    ]);
}
}