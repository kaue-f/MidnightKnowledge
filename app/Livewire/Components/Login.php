<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Http\Controllers\AuthController;
use App\Livewire\Forms\LoginDTO;

class Login extends Component
{
    public LoginDTO $loginDTO;

    public function render()
    {
        return view('livewire.components.login');
    }

    public function login(AuthController $auth)
    {
        $this->validate();
        $auth->authenticate($this->loginDTO->all());
    }
}
