<?php

namespace App\Livewire\Pages;

use App\Enums\Roles;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class UserProfile extends Component
{
    public $user;
    public string $avatar;
    public bool $modalImage = false;
    public bool $modalUser = false;

    public function render()
    {
        return view('livewire.pages.user-profile');
        // ->title($this->user->username); #Não sei qual title colocar
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->avatar = $this->user->image ?? imageNoneUser();
        $this->user->role = Roles::set($this->user->role);
    }
}
