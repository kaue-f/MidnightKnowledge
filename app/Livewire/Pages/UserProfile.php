<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class UserProfile extends Component
{
    public function render()
    {
        return view('livewire.pages.user-profile');
    }

    public function mount()
    {
        // dd(Auth::id());
    }
}
