<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Livewire\Forms\LoginForm;

class Login extends Component
{
    public LoginForm $loginForm;

    public function render()
    {
        return view('livewire.components.login');
    }

    public function login()
    {
        $this->loginForm->authenticate();
    }
}
