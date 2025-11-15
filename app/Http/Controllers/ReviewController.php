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

        $user_id = Auth::id();
        $umkm = Umkm::findOrFail($umkm_id);

        Review::create([
            'user_id' => $user_id,
            'umkm_id' => $umkm->id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        $avg_rating = Review::where('umkm_id', $umkm_id)->avg('rating');

        $umkm->update([
            'average_rating' => $avg_rating,
        ]);

        return back()->withSuccess('Penilaian berhasil! Terimakasih telah memberi penilaian!');
    }
}
