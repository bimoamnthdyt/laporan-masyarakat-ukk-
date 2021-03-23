<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;


class AuthController extends Controller
{
    public function getLogin()
    {
        return view('auth/login');
    }

    public function postLogin(Request $request)
    {
        if (!\Auth::attempt(['nik' => $request->nik, 'email' => $request->email, 'password' => $request->password])) {
           return redirect()->back();
        }

        return redirect()->route('dashboarduser');

    }

    public function getRegister()
    {
        return view('auth/register');
    }

    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|min:4',
            'nik' => 'required|min:16|integer|unique:users',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed'

        ]);
        
        User::create([
            'name' => $request->name,
            'nik' => $request->nik,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ]);

        return redirect('login');
    }

    public function logout()
    {
        \Auth::logout();
        return redirect()->route('login');
    }
}
