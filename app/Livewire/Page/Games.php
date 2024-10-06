<?php

namespace App\Livewire\Page;

use Livewire\Component;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Games extends Component
{
    #[Layout('components.layouts.app')]
    #[Title('Games')]
    public function render()
    {

        return view('livewire.page.games');
    }
}
