<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class ProductController extends Controller
{
    public function create() {
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }
}
