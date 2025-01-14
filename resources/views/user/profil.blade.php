@extends('layouts.app')
@section('content')
   <div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col-md">
                <h6>Profil User</h6>
            </div>
            <div class="col-md">
                <div class="float-end">
                    <a href="{{route('profilEdit',$user->id)}}" class="btn btn-primary"> Edit profil</a>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-2">
                @if($user->foto)
                <img src="{{asset('storage/user/'.$user->foto)}}" alt="" width="100%">
                @else
                <img
                    src="https://api.dicebear.com/9.x/adventurer-neutral/svg?seed=Brooklynn"
                    width="100%"
                    alt="avatar" />
                @endif
            </div>
            <div class="col-md">
                <table class="table">
                    <tr>
                        <td width="20%">Nama</td>
                        <td width="3%">:</td>
                        <td>{{$user->nama}}</td>
                    </tr>
                    <tr>
                        <td width="20%">tanggal lahir</td>
                        <td width="3%">:</td>
                        <td>{{$user->tanggal_lahir}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Nomor Telepon</td>
                        <td width="3%">:</td>
                        <td>{{$user->nomor_telepon}}</td>
                    </tr>
                    <tr>
                        <td width="20%">Username</td>
                        <td width="3%">:</td>
                        <td>{{$user->username}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
   </div>
@endsection