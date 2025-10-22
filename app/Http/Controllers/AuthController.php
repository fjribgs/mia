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

            if(Auth::user()->role == 'admin') {
                return redirect()->route('dashboard.admin');
            } elseif(Auth::user()->role == 'umkm') {
                return redirect()->route('dashboard.umkm');
            } else {
                return redirect()->route('dashboard.user');
            }
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
        ], [
            // name
            'name.required' => 'Nama lengkap wajib diisi.',
            'name.min' => 'Nama lengkap minimal terdiri dari 3 karakter.',
            'name.max' => 'Nama lengkap tidak boleh lebih dari 255 karakter.',
            'name.regex' => 'Nama lengkap hanya boleh berisi huruf, spasi, tanda hubung (-), dan apostrof (’).',

            // username
            'username.required' => 'Username wajib diisi.',
            'username.min' => 'Username minimal terdiri dari 3 karakter.',
            'username.max' => 'Username tidak boleh lebih dari 100 karakter.',
            'username.unique' => 'Username ini sudah digunakan, silakan pilih yang lain.',
            'username.regex' => 'Username hanya boleh berisi huruf kecil, angka, dan underscore (_), tanpa spasi atau simbol lainnya.',

            // email
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Alamat email ini sudah terdaftar.',

            // password
            'password.required' => 'Kata sandi wajib diisi.',
            'password.confirmed' => 'Konfirmasi kata sandi tidak cocok.',
            'password.regex' => 'Kata sandi harus memiliki minimal 6 karakter dan mengandung huruf besar, huruf kecil, angka, serta simbol.',
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
            ->route('dashboard.user')
            ->withSuccess('Selamat, '. $user->name. 'akun Anda berhasil dibuat!');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('auth.login');
    }
}
