<?php

namespace App\Livewire\Components;

use Livewire\Component;

class Navbar extends Component
{
    public bool $showDrawer = false;

    public $avatar = 'https://i.pinimg.com/564x/82/0d/5e/820d5e7f8a6fa35d2f96bbb4876e75bb.jpg';
    public function render()
    {
        return view('livewire.components.navbar');
    }
}
