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

    public function edit($category_id) {
        $category = Category::findOrFail($category_id);
        return view('category.edit', compact('category'));
    }

    public function update(Request $request, $category_id) {
        $request->validate([
            'category_name' => 'required|min:3|max:100|regex:/^[A-Za-zÀ-ÿ ]+$/',
        ]);

        $category = Category::findOrFail($category_id);
        $category->update($request->all());

        return redirect()->route('category.index')->withSuccess('Data kategori berhasil diubah!');
    }

    public function destroy($category_id) {
        $category = Category::findOrFail($category_id);
        $category->delete();

        return redirect()->route('category.index')->withSuccess('Data kategori berhasil dihapus!');
    }
}
