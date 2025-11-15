<?php

namespace App\Livewire;

use App\Models\Category;
use Livewire\Component;
use App\Models\User;
use App\Models\Umkm;

class UmkmIndex extends Component
{
    public $search = '';

    public function render()
    {
        return view('livewire.umkm-index', [
            'umkms' => User::where('role', 'umkm')->where('name', 'like', '%'.$this->search.'%')->with(['umkm', 'umkm.categories'])->get(),
        ]);
    }
}
