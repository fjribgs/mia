<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index() {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    public function create() {
        return view('category.create');
    }

    public function store(Request $request) {
        $request->validate([
            'category_name' => 'required|min:3|max:100|regex:/^[A-Za-zÀ-ÿ ]+$/',
        ]);

        Category::create($request->all());

        return redirect()->route('category.index')->withSuccess('Data kategori berhasil dibuat!');
    }
}
