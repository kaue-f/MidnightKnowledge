<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class LoginForm extends Form
{
    #[Validate('required', message: 'Insira Username ou e-mail')]
    #[Validate('min:3', message: 'Minimo 3 caracteres.')]
    public string $user = '';

    #[Validate('required', message: 'Insira senha.')]
    #[Validate('min:8', message: 'Minimo 8 caracteres.')]
    public string $password = '';

    public bool $remember = false;
}
