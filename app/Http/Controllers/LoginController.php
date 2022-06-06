<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('login.login', ['title' => 'Login']);

    }


    public function authenticate(Request $request){
        $credentials =$request->validate([
            'email' => 'required|email:dns',
            'password' => 'require'
        ]);
        
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            
            return redirect()->intended('/');
        }

        return back()->withErrors('loginError', 'Login failed!');

        dd('berhasil login');

    }
}
