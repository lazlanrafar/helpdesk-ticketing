<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login(){
        return view('pages.auth.login');
    }

    public function authenticate(Request $request){
        if(Auth::attempt(['username' => $request->username, 'password' => $request->password])){
            $request->session()->regenerate();

            $user = User::where('username', $request->username)->first();
            $request->session()->put('user', $user);
        }

        return back()->with('error', 'Email atau Password salah');
    }
}
