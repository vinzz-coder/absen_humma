<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function landing()
    {
        return view('landing.landing');
    }

    public function showLogin()
    {
        return view('login.login');
    }

    public function login(Request $request)
    {
        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect('/dashboard');
        }

        return back()->with('error', 'Login gagal');
    }
}
