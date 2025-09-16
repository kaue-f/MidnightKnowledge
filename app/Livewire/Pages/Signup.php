<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use Livewire\Attributes\Layout;

class Signup extends Component
{
    #[Layout('components.layouts.appLogin')]
    public function render()
    {
        return view('livewire.pages.signup')
            ->title(trans('titles.signup'));
    }
}
