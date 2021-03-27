<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('user/index',['user' => $user]);
    }

    public function laporanUser()
    {
        $users = User::all();
        return view('user/laporanuser');
    }
}
