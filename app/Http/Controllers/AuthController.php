<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Karyawan;

class AuthController extends Controller
{
    public function login(){
        return view('pages.auth.login');
    }

    public function authenticate(Request $request){
        if(Auth::attempt(['username' => $request->uid, 'password' => $request->password])){
            $request->session()->regenerate();

            $user = User::where('username', $request->uid)->first();
            $request->session()->put('user', $user);

            $karyawan = Karyawan::where('id', $user->id_karyawan)->first();
            $request->session()->put('karyawan', $karyawan);
        }

        if(Auth::attempt(['email' => $request->uid, 'password' => $request->password])){
            $request->session()->regenerate();

            $user = User::where('email', $request->uid)->first();
            $request->session()->put('user', $user);

            $karyawan = Karyawan::where('id', $user->id_karyawan)->first();
            $request->session()->put('karyawan', $karyawan);
        }

        return back()->with('error', 'Email atau Password salah');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
