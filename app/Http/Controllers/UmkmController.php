<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Umkm;

class UmkmController extends Controller
{
    public function regisUmkm() {
        return view('auth.umkm_regis');
    }

    public function postregisUmkm(Request $request) {
        //
    }

    public function dashboard($umkm_id) {
        $umkm = Umkm::findOrFail($umkm_id);
        return view('dashboard.umkm', compact('umkm'));
    }

    public function logoutIfAlreadyLogin(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('umkm.regis');
    }
}
