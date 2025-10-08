<?php

namespace App\Livewire\Pages\Auth;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Profile extends Component
{
    public ?User $user;

    public function render()
    {
        return view('livewire.pages.auth.profile');
        // ->title($this->user->username); #Não sei qual title colocar
    }

    public function mount()
    {
        $this->user = Auth::user();
    }
}
