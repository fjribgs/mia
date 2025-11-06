<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Promo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class PromoController extends Controller
{
    public function index() {
        $promos = Promo::where('umkm_id', Auth::user()->umkm->id)->get();
        return view('promo.index', compact('promos'));
    }

    public function create() {
        return view('promo.create');
    }

    public function store(Request $request) {
        $today = Carbon::today();
        $request->validate([
            'type' => 'required|string|in:Diskon,Promo',
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'start_date' => [
                'required',
                'date',
                'after_or_equal:' . $today->toDateString(),
            ],
            'end_date' => [
                'required',
                'date',
                'after:start_date',
            ],
            'discount_percent' => 'nullable|numeric|required_if:type,Diskon|min:0|max:100',
        ], [
            // type
            'type.required' => 'Jenis promo wajib dipilih.',
            'type.string' => 'Jenis promo harus berupa teks yang valid.',
            'type.in' => 'Jenis promo hanya boleh "Diskon" atau "Promo".',

            // name
            'name.required' => 'Nama promo wajib diisi.',
            'name.string' => 'Nama promo harus berupa teks.',
            'name.max' => 'Nama promo tidak boleh lebih dari 100 karakter.',

            // description
            'description.string' => 'Deskripsi promo harus berupa teks.',

            // start_date
            'start_date.required' => 'Tanggal mulai promo wajib diisi.',
            'start_date.date' => 'Tanggal mulai promo harus berupa tanggal yang valid.',
            'start_date.after_or_equal' => 'Tanggal mulai promo tidak boleh sebelum hari ini.',

            // end_date
            'end_date.required' => 'Tanggal berakhir promo wajib diisi.',
            'end_date.date' => 'Tanggal berakhir promo harus berupa tanggal yang valid.',
            'end_date.after' => 'Tanggal berakhir promo harus setelah tanggal mulai promo.',

            // discount_percent
            'discount_percent.numeric' => 'Diskon harus berupa angka.',
            'discount_percent.required_if' => 'Diskon wajib diisi jika tipe promo adalah Diskon.',
            'discount_percent.min' => 'Diskon tidak boleh kurang dari 0%.',
            'discount_percent.max' => 'Diskon tidak boleh lebih dari 100%.',
        ]);

        $promo_data = [
            'umkm_id' => Auth::user()->umkm->id,
            'type' => $request->type,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ];

        if($request->description != null) {
            $promo_data['description'] = $request->description;
        }

        if($request->discount_percent != null) {
            $promo_data['discount_percent'] = $request->discount_percent;
        }

        $start_date = Carbon::parse($request->start_date);
        if($start_date->equalTo($today)) {
            $promo_data['status'] = 'Berjalan';
        } elseif($start_date->greaterThan($today)) {
            $promo_data['status'] = 'Akan Dimulai';
        }

        Promo::create($promo_data);

        return redirect()->route('promo.index')->withSuccess('Selamat! Data promo berhasil dibuat!');
    }

    public function edit($promo_id) {
        $promo = Promo::findOrFail($promo_id);
        return view('promo.edit', compact('promo'));
    }

    public function update(Request $request, $promo_id) {
        $promo = Promo::findOrFail($promo_id);
        $today = Carbon::today();

        $request->validate([
            'type' => 'required|string|in:Diskon,Promo',
            'name' => 'required|string|max:100',
            'description' => 'nullable|string',
            'start_date' => [
                'required',
                'date',
                'after_or_equal:' . $promo->start_date,
            ],
            'end_date' => [
                'required',
                'date',
                'after:start_date',
            ],
            'discount_percent' => 'nullable|numeric|required_if:type,Diskon|min:0|max:100',
        ], [
            // type
            'type.required' => 'Jenis promo wajib dipilih.',
            'type.string' => 'Jenis promo harus berupa teks yang valid.',
            'type.in' => 'Jenis promo hanya boleh "Diskon" atau "Promo".',

            // name
            'name.required' => 'Nama promo wajib diisi.',
            'name.string' => 'Nama promo harus berupa teks.',
            'name.max' => 'Nama promo tidak boleh lebih dari 100 karakter.',

            // description
            'description.string' => 'Deskripsi promo harus berupa teks.',

            // start_date
            'start_date.required' => 'Tanggal mulai promo wajib diisi.',
            'start_date.date' => 'Tanggal mulai promo harus berupa tanggal yang valid.',
            'start_date.after_or_equal' => 'Tanggal mulai promo tidak boleh sebelum tanggal mulai sebelumnya.',

            // end_date
            'end_date.required' => 'Tanggal berakhir promo wajib diisi.',
            'end_date.date' => 'Tanggal berakhir promo harus berupa tanggal yang valid.',
            'end_date.after' => 'Tanggal berakhir promo harus setelah tanggal mulai promo.',

            // discount_percent
            'discount_percent.numeric' => 'Diskon harus berupa angka.',
            'discount_percent.required_if' => 'Diskon wajib diisi jika tipe promo adalah Diskon.',
            'discount_percent.min' => 'Diskon tidak boleh kurang dari 0%.',
            'discount_percent.max' => 'Diskon tidak boleh lebih dari 100%.',
        ]);

        if ($promo->status === 'Berjalan' && $request->start_date != $promo->start_date) {
            return back()->withErrors(['start_date' => 'Promo yang sedang berjalan tidak dapat diubah tanggal mulainya.']);
        }

        $promo_data = [
            'type' => $request->type,
            'name' => $request->name,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ];

        if($request->description != null) {
            $promo_data['description'] = $request->description;
        }

        if($request->discount_percent != null) {
            $promo_data['discount_percent'] = $request->discount_percent;
        }

        $start_date = Carbon::parse($request->start_date);
        $end_date = Carbon::parse($request->end_date);

        if ($today->between($start_date, $end_date)) {
            $promo_data['status'] = 'Berjalan';
        } elseif ($today->lessThan($start_date)) {
            $promo_data['status'] = 'Akan Dimulai';
        } else {
            $promo_data['status'] = 'Sudah Berakhir';
        }

        $promo->update($promo_data);

        return redirect()->route('promo.index')->withSuccess('Selamat! Data promo '. $promo->name . ' berhasil di update!');
    }

    public function destroy($promo_id) {
        $promo = Promo::findOrFail($promo_id);
        $promo_name = $promo->name;
        $promo->delete();

        return redirect()->route('promo.index')->withSuccess('Promo '. $promo_name .' berhasil dihapus!');
    }
}
