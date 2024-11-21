<?php

namespace App\Livewire\Components;

use App\DTO\UserDTO;
use Livewire\Component;
use App\Http\Controllers\AuthController;

class Login extends Component
{
    public array $userDTO;
    public $remember;

    public function render()
    {
        return view('livewire.components.login');
    }

    public function mount()
    {
        $this->userDTO = (array) new UserDTO;
    }

    public function login(AuthController $authController)
    {
        $authController->authenticate($this->userDTO, $this->remember);
    }
}
