<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index($angka1,$angka2)
    {
        $hasil = $angka1 + $angka2;
        return view('home',compact('hasil'));
    }
}
