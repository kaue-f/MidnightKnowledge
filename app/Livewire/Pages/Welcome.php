<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Url;

class Welcome extends Component
{
    #[Url]
    public string $welcome = 'login';
    public bool $open = false;

    #[Layout('components.layouts.appLogin')]
    #[Title('Welcome')]
    public function render()
    {
        return view('livewire.pages.welcome');
    }

    public function mount()
    {
        $this->open = match ($this->welcome) {
            'login' => false,
            'sign' => true,
            default => false
        };
    }
}
