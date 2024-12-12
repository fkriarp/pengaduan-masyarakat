<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function register(Request $request)
    {
        $request->validate([
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
        ]);

        User::create([
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('dashboard')->with('success', 'Selamat datang!');        

    }

    public function showLogin() 
    {
        return view('login');
    }

    public function login(Request $request) 
    {
        $credential = $request->only('email', 'password');

        if (Auth::attempt($credential)) {
            return redirect()->route('dashboard')->with('success', 'Selamat datang kembali!');
        } else {
            return redirect()->back()->with('failed', 'Periksa kembali email dan password. Lalu, coba lagi');
        }
    }

    public function logout()
    {
        Auth::logout();

        return redirect()->route('showLogin');
    }
}
