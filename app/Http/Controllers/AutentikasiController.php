<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AutentikasiController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginstore(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->route('main')->with('success','berhasil login');
        }

        return redirect()->route('login')->with('warning','username atau password salah');

    }

    public function register()
    {
        return view('register');
    }

    public function registerstore(Request $request)
    {
        User::create([
            'nama'      => $request->nama,
            'username'  => $request->username,
            'password'  => Hash::make($request->password)
        ]);
        
        return redirect()->route('login')->with('success','silahkan login dengan akun anda');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('main')->with('success','berhasil logout');
    }
}
