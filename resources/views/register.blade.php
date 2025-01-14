@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            Register User
        </div>
        <div class="card-body">
            <form action="{{route('registerstore')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Nama</label>
                    <input type="text" name="nama" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">register</button> <br>
                <a href="{{route('login')}}" class="nav-link mt-2">Kembali ke halaman login</a>
            </form>
        </div>
    </div>
@endsection