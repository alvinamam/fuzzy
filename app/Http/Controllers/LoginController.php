<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login.index'); 
    }
    public function store(Request $request)
    {
        //return $request;
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            return redirect('/beranda');
        }
        else{
            return redirect()->back()->with('success', 'email atau password salah!');
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}