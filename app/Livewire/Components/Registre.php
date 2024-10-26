<?php

namespace App\Livewire\Components;

use App\DTO\UserDTO;
use Livewire\Component;

class Registre extends Component
{
    public array $userDTO;
    public function render()
    {
        return view('livewire.components.registre');
    }

    public function mount()
    {
        $this->userDTO = (array) new UserDTO;
    }
    
    public function register()
    {
        dd($this->userDTO['name']);
    }
}
