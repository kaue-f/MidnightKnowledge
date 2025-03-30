<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class UserProfile extends Component
{
    public ?User $user;

    public function render()
    {
        return view('livewire.pages.user-profile');
        // ->title($this->user->username); #Não sei qual title colocar
    }

    public function mount()
    {
        $this->user = Auth::user();
    }
}
