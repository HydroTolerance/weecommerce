<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;

class AccountController extends Controller
{
    public static function register(){
        return view('register');
    }

    public function registration(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8',
            'role' => 'nullable'
        ]);

        $user = Account::create([
            'email' => $validatedData['email'],
            'password' => bcrypt($validatedData['password']), // Hash the password
            'role' => 'nullable'
        ]);

        // Optionally, you can redirect the user after insertion
        return redirect()->route('products.index');
    }
}
