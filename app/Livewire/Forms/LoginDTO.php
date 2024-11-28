<?php

namespace App\Livewire\Forms;

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
}
