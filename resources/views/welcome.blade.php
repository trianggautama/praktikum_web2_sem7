@extends('layouts.app')
@section('content')
    <div class="">
        <h1>Praktikum Web 2 </h1>
        <h3>Selamat datang @if(Auth::check()) {{Auth::user()->nama}} @endif</h3>
    </div>
@endsection