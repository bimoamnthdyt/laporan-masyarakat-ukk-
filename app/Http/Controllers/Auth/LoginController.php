<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use App\User;

class LoginController extends Controller
{
    public function getLogin()
    {
        return view('auth/login');
    }

    public function postLogin(Request $request)
    {
        if (!\Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
           return redirect()->back();
        }

        dd($request);
        // return redirect()->route('dashboarduser');

    }
}
