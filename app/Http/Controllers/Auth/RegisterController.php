<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    public function getRegister()
    {
        return view('auth/register');
    }

    public function postRegister(Request $request)
    {
           
        User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'nik' => $request['nik'],
            'telp' => $request['telp'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect('login');
    }
}
