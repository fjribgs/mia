<?php

namespace App\Livewire;

use Livewire\Component;

class Navbar extends Component
{
    public $isOpenMobile = false;
    public $isOpenDesktop = false;
    public $isSidebarOpen = false;

    public function toggleMobile() {
        $this -> isOpenMobile = !$this -> isOpenMobile;
    }

    public function toggleDesktop() {
        $this -> isOpenDesktop = !$this -> isOpenDesktop;
    }

    public function toggleSidebar() {
        $this -> isSidebarOpen = !$this -> isSidebarOpen;
    }

    public function render()
    {
        return view('livewire.navbar');
    }
}
