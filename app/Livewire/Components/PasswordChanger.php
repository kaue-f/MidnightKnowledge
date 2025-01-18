<?php

namespace App\Livewire\Components;

use App\Http\Controllers\UserController;
use App\Livewire\Forms\PasswordDTO;
use Livewire\Component;

class PasswordChanger extends Component
{
    public bool $passwordModal = false;
    public PasswordDTO $passwordDTO;
    public $user;

    public function render()
    {
        return view('livewire.components.password-changer');
    }

    public function changerPassword(UserController $userController)
    {
        $password = $this->passwordDTO->validatePassword($this->user->password);
        if (!isNullOrEmpty($password)) {
            $userController->password($this->user->id, $password);
            $this->reset();
        }
    }
}
