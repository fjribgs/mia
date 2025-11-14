<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;

class UmkmIndex extends Component
{
    public $query = '';

    public function render()
    {
        $results = User::where('role', 'umkm')->where('name', 'like', '%' . $this->query . '%')->get();

        return view('livewire.umkm-index', compact('results'));
    }
}
