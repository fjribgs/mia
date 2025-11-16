<?php

namespace App\Livewire;
use App\Models\Category;
use Livewire\Component;
use App\Models\User;
use App\Models\UmkmCategory;

class UmkmIndex extends Component
{
    public $search = '';
    public $selectedCategory = '';

    public function render() {
        $umkmCategories = UmkmCategory::with([
            'umkm',
            'umkm.user',
            'category'
        ])

        ->whereHas('umkm.user', function ($q) {
            $q->where('name', '!=', 'admin');
        })

        ->whereHas('umkm.user', function ($q) {
            $q->where('name', 'like', '%'.$this->search.'%');
        })

        ->get();

        $categories = Category::all();

        return view('livewire.umkm-index', [
            'umkms' => $umkmCategories,
            'categories' => $categories,
        ]);
    }
}
