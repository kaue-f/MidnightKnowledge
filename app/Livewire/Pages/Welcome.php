<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Welcome extends Component
{
    #[Layout('components.layouts.appLogin')]
    public function render()
    {
        return view('livewire.pages.welcome')
            ->title(trans('titles.welcome'));
    }
}
