<?php

namespace App\Livewire\Forms;

use App\Http\Controllers\AuthController;
use App\Models\User;
use Livewire\Attributes\Validate;
use Livewire\Form;

class LoginDTO extends Form
{
    #[Validate('required', message: 'Insira nome de usuário ou e-mail')]
    #[Validate('min:3', message: 'Minimo 3 caracteres.')]
    public string $user;

    #[Validate('required', message: 'Insira senha.')]
    #[Validate('min:8', message: 'Minimo 8 caracteres.')]
    public string $password;

    public bool $remember = false;

    public  function authenticate()
    {
        $user = User::where('email', $this->user)
            ->orWhere('username', $this->user)
            ->first();

        if (isNullOrEmpty($user)) {
            return $this->addError(
                'user',
                'Parece que esse e-mail ou nome de usuário não está cadastrado. Verifique e tente novamente.'
            );
        }

        $this->validate();

        if (!app()->make(AuthController::class)->authenticate($this->all())) {
            $this->addError(
                'user',
                'Usuário ou senha inválidos. Verifique e tente novamente.'
            );
            $this->addError(
                'password',
                'Usuário ou senha inválidos. Verifique e tente novamente.'
            );
        }
    }
}
