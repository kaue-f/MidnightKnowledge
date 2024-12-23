<?php

namespace App\Livewire\Components;

use App\Livewire\Forms\RegisterDTO;
use Livewire\Component;
use App\Http\Controllers\AuthController;

class Register extends Component
{
    public RegisterDTO $registerDTO;

    public function render()
    {
        return view('livewire.components.register');
    }

    public function register(AuthController $auth)
    {
        $this->validate();
        $auth->create($this->registerDTO->only(
            'username',
            'email',
            'password'
        ));
    }
}
