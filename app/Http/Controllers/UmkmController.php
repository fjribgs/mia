<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Umkm;
use App\Models\UmkmCategory;
use Laravolt\Indonesia\Models\City;
use Laravolt\Indonesia\Models\Province;

class UmkmController extends Controller
{
    public function regisUmkm() {
        $provinces = Province::where('name', 'JAWA BARAT')->get();
        $cities = City::whereIn('name', ['KOTA BANDUNG', 'KABUPATEN BANDUNG', 'KABUPATEN BANDUNG BARAT'])->get();
        return view('auth.umkm_regis', compact('provinces', 'cities'));
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

    public function index() {
        $umkms = Umkm::all();
        return view('umkm.index', compact('umkms'));
    }

    public function view($umkm_id) {
        $umkm = UmkmCategory::where('umkm_id', $umkm_id)->get();
        $products = Product::where('umkm_id', $umkm_id)->get();
        return view('umkm.view', compact('umkm', 'products'));
    }
}
