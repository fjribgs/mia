<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Umkm;
use App\Models\Review;

class ReviewController extends Controller
{
    public function store(Request $request, $umkm_id) {
        $request->validate([
            'rating' => 'required|numeric|max:5|min:1',
            'comment' => 'nullable|string|max:255',
        ]);

        $user = User::where('id', Auth::user()->id)->get();
        $umkm = Umkm::where('id', $umkm_id)->get();

        Review::create([
            'user_id' => $user[0]->id,
            'umkm_id' => $umkm[0]->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        return back()->withSuccess('Penilaian berhasil! Terimakasih telah memberi penilaian!');
    }
}
