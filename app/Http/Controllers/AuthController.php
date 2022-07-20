<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('login', [
            'title' => 'login'
        ]);
    }
    public function login(Request $request)
    {
        $username = $request->only('username');
        $cekUsername = User::where('username', $username)->orWhere('npm', $username)->first();
        if ($cekUsername) {
            Auth::attempt($request->only('username', 'password'));
            return redirect('/dasbor');
        }
        return redirect('/login')->with('danger', 'Masukkan username dan password dengan benar!');
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Berhasil Logout!');
    }
}
