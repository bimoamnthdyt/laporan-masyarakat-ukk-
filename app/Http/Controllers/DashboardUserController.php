<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardUserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('user/index',compact('users'));
    }

    public function laporanUser()
    {
        $users = User::all();
        return view('user/laporanuser',compact('users'));
    }
}
