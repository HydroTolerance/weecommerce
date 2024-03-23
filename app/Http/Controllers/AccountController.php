<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;
use Illuminate\Support\Facades\Hash;

class AccountController extends Controller
{
    public static function register(){
        return view('register');
    }

    public function registration(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'role' => 'nullable'
        ]);
        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $data['role'] = $request->password;
        $user = User::create($data);
        if(!$user){
            return redirect()->route('registration');
        }
        {
            return redirect()->route('login');
        }
    }
}
