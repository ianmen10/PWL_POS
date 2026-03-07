<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
  public function index()
{
    $user = UserModel::where('level_id', 2)->firstOr(function() {
        return "Tidak ada user dengan level_id 2";
    });
    
    return view('user', ['data' => $user]);
}
}