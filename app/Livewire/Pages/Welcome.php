<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;

class Welcome extends Component
{
    #[Layout('components.layouts.appLogin')]
    #[Title('Welcome')]
    public function render()
    {
        return view('livewire.pages.welcome');
    }
}
