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
        try {
            $auth->authenticate($this->loginDTO->all());
        } catch (\Throwable $th) {
            notyf()->error(message: "Não foi possível realizar o login no momento, tente mais tarde.");
        }
    }
}
