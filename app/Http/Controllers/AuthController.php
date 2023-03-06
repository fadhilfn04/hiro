<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function action_login(Request $request)
    {
        if (Auth::attempt($request->only('nik', 'password')))
            return redirect()->route('dashboard');
        
        return redirect()->route('login')->with('error', 'Credentials is invalid or not registered yet');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect()->route('login');
    }
}
