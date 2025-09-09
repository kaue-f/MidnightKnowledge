<?php

namespace App\Livewire\Pages;

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

class Signup extends Component
{
     #[Layout('components.layouts.appLogin')]
     #[Title('Signup')]
    public function render()
    {
        return view('livewire.pages.signup');
    }
}
