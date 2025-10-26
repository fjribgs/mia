<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
}
