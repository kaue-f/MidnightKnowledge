<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Support\Facades\Auth;

class Settings extends Component
{
    public string $selectedTab = "all-tab";
    public ?User $user;
    public string $avatar;

    #[Title('Configurações')]
    public function render()
    {
        return view('livewire.pages.settings');
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->avatar = $this->user->image ?? imageNoneUser();
    }
}
