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
        $user = $auth->create($this->registerDTO->only(
            'username',
            'email',
            'password'
        ));
        $this->reset();
        return (isNullOrEmpty($user))
            ?  $this->redirect('/welcome')
            :  $this->redirect('/');
    }
}
