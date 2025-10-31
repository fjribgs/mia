<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use Illuminate\Support\Facades\Auth;

class PromoController extends Controller
{
    public function index() {
        $promos = Promo::where('umkm_id', Auth::user()->umkm->id)->get();
        return view('promo.index', compact('promos'));
    }

    public function create() {
        return view('promo.create');
    }
}
