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
        $q->where('name', '!=', 'admin')
            ->where('name', 'like', '%'.$this->search.'%');
        });

        if (!empty($this->selectedCategory)) {
            $umkmCategories->where('category_id', $this->selectedCategory);
        }

        $categories = Category::all();

        return view('livewire.umkm-index', [
            'umkms' => $umkmCategories->get(),
            'categories' => $categories,
        ]);
    }
}
