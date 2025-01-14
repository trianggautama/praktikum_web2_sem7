<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function profil()
    {
        $user = Auth::user();
        return view('user.profil',compact('user'));
    }

    public function profilEdit($id)
    {
        $user = User::findOrFail($id);
        return view('user.profil_edit',compact('user'));
    }

    public function profilUpdate(Request $request, $id)
    {
        $user   = User::findOrFail($id);
        $input  = $request->all();

        if($request->filled('password'))
        {
            $input['password'] =  Hash::make($request->password);
        }else{
            $input['password'] =  $user->password;
        }

        if($request->filled('username'))
        {
            $input['username'] =  $request->username;
        }else{
            $input['username'] =  $user->username;
        }

        if($request->foto)
        {
            $file_name      = $request->foto->getClientOriginalName();
            $input['foto']  =  $file_name;
            $request->file('foto')->move('storage/user/',$file_name);
        }

        $user->update($input);

        return redirect()->route('profil')->with('success','data berhasil diperbaharui');
    }
}
