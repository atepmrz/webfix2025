<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    public function index()
    {
        return view('user.login');
    }

    public function proses_login(Request $request){
        $request->validate(
            [
                'email' => 'required|email',
                'password' => 'required',
            ],
            [
                'email.required' => 'Email wajib diisi',
                'email.email' =>'Format email tidak sesuai',
                'password.required' => 'Password wajib diisi',
            ],
        );

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return to_route('home');
        } else {
            return redirect('/login')->withErrors(['login' => 'Username & Password tidak sesuai'])->withInput();
        }
    }
    public function logout()
    {
        Auth::logout();
        return to_route('home');
    }
}
