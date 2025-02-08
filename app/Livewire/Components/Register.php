<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Livewire\Forms\RegisterForm;
use App\Http\Controllers\AuthController;

class Register extends Component
{
    public RegisterForm $registerForm;

    public function render()
    {
        return view('livewire.components.register');
    }

    public function register(AuthController $auth)
    {
        $this->validate();
        $auth->create($this->registerForm->only(
            'nickname',
            'email',
            'password'
        ));
    }
}
