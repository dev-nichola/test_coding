<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Masmerise\Toaster\Toaster;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function credential(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:8',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            Toaster::success('Successfully logged in');
            return redirect()->route('dashboard');
        }

        Toaster::error('Gagal Login');
        return back();
    }
}
