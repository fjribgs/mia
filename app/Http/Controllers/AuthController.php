<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;

class AuthController extends Controller
{
    public function login() {
        return view('auth.login');
    }

    public function postlogin(Request $request) {
        $request->validate([
            'username' => 'required|exists:users,username',
            'password' => 'required',
        ]);

        $credentials = $request->only(['username', 'password']);

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->route('dashboard');
        }

        return back()->withErrors('Username atau password salah! Silakan coba lagi!');
    }

    public function register() {
        return view('auth.register');
    }

    public function postregis(Request $request) {
        $request->validate([
            'name' => 'required|min:3|max:255|regex:/^[A-Za-zÀ-ÿ\'’\- ]+$/',
            'username' => 'required|min:3|max:100|unique:users,username,1,id|regex:/^[a-z0-9_]+$/',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{6,}$/',
        ]);

        $user = User::create([
            'username' => $request['username'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);

        Auth::login($user);
        $request->session()->regenerate();

        return redirect()
            ->route('dashboard')
            ->withSuccess('Selamat, '. $user->name. 'akun Anda berhasil dibuat!');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
