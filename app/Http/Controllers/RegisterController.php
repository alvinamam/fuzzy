<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index() 
    {
        return view('Register.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|min:5|max:30',
            'jenis_kelamin' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ],
    [
        'nama.required' => 'kolom nama harus diisi !',
        'nama.min' => 'Nama minimal 5 karakter !',
        'nama.max' => 'Nama minimal 30 karakter !',
        'jenis_kelamin.required' => 'Jenis kelamin harus diisi!',
        'password.required' => 'password harus diisi!',
        'email.required' => 'email harus diisi!',
        'email.unique' => 'Email telah terdaftar!',
    ]
    );
    //return $request;
    User::create([
        'name' => $request->nama,
        'email' => $request->email,
        'jenis_kelamin' => $request->jenis_kelamin,
        'password' => Hash::make($request->password)
    ]);
    return redirect('login')->with('success', $request->nama. 'Berhasil Mendaftar, Silahkan login! ');
    }
}
