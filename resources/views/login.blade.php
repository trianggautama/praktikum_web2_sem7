@extends('layouts.app')
@section('content')
    <div class="card">
        <div class="card-header">
            Sign In
        </div>
        <div class="card-body">
            <form action="{{route('loginstore')}}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">username</label>
                    <input type="text" name="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="">password</label>
                    <input type="password" name="password" class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Login</button> <br>
                <a href="{{route('register')}}" class="nav-link">belum punya akun ? daftar disini.</a>
            </form>
        </div>
    </div>
@endsection