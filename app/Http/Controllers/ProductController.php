<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Promo;
use App\Models\Product;

class ProductController extends Controller
{
    public function create() {
        $categories = Category::all();
        $promos = Promo::all();
        return view('product.create', compact('categories', 'promos'));
    }

    public function store(Request $request) {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'category_id' => 'required|exists:categories,id',
            'promo_id' => 'nullable|exists:promos,id',
            'price' => 'required|numeric|min:0',
            'status' => 'required|in:Tersedia,Habis,Dihentikan',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
        }

        Product::create([
            'name' => $validated['name'],
            'description' => $validated['description'] ?? null,
            'category_id' => $validated['category_id'],
            'promo_id' => $validated['promo_id'] ?? null,
            'price' => $validated['price'],
            'status' => $validated['status'],
            'image' => $imagePath,
        ]);

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }
}
