<?php

namespace App\Livewire\Pages;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;

class Settings extends Component
{
    public string $selectedTab = "all-tab";
    public $user;
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
