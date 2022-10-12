<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class authController extends Controller
{
    //controller register
    public function register()
    {
        return view('register');
    }
    public function daftar(Request $request)
    {
        $request->validate([
            "name" => ['required'],
            "username" => ['required'],
            "username" => ['required'],
            "password" => ['required']
        ]);

        User::create([
            "name" => $request->name,
            "username" => $request->username,
            "email" => $request->email,
            "password" => bcrypt($request->name)
        ]);

        return redirect('/login');
    }

    //controller login
    public function login()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $request->validate([
            "email" => ['required'],
            "password" => ['required']
        ]);

        if (Auth::attempt(["email" => $request->email, "password" => $request->password])) {
            return redirect()->intended('/biodata');
        } else {
            return redirect('/login')->with('message', 'username atau password anda salah')->withInput();
        }
    }
    public function logout()
    {
        auth::logout();
        return redirect('/login');
    }
}
