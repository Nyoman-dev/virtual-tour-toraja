<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginController extends Controller
{
    public function indexLogin(){
        return view('auth.login');
    }
    public function indexRegister(){
        return view('auth.sigin');
    }

    public function register(Request $request){
        $validatedData = $request->validate([
            'name' => ['min:3', 'max:255', 'required', 'unique:users'],
            'email' => ['email', 'required', 'unique:users'],
            'password' => ['min:5', 'required'],
        ]);
        $validatedData['password'] = bcrypt($validatedData['password']);
        User::create($validatedData);
        return redirect('/login')->with('success', 'Register successful!');
    }

    public function authenticate(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required',
        ]);
        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('/deskripsi-wisata');
        }
        return back()->with('eror','Gagal Login!! Periksa Email dan Password Anda');
    }

    public function logout(): RedirectResponse
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/deskripsi-wisata');
    }
}
