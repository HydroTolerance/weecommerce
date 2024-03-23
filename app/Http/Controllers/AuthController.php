<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended(route('products.index'))->with("success", "Login successful");
        }
        return redirect()->route('login')->with("error", "Login details are not valid");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

