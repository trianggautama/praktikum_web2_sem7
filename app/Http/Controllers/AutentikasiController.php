<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginstore(Request $request)
    {
        
    }

    public function register()
    {
        return view('register');
    }

    public function registerstore(Request $request)
    {

    }

    public function logout(Request $request)
    {

    }
}
