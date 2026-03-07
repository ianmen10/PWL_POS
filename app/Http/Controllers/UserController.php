<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;

class UserController extends Controller
{
    public function index()
{
    try {
        $user = UserModel::findOrFail(1);
        return view('user', ['data' => $user]);
    } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
        return "Data user tidak ditemukan";
    }
}   
}