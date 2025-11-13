<?php

namespace App\Livewire;

use Livewire\Component;

class SearchUmkm extends Component
{
    public $search = '';
    
    public function render()
    {
        return view('livewire.search-umkm');
    }
}
