<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Validate;
use Livewire\Form;

class RegisterDTO extends Form
{
    #[Validate('required', message: 'Nome de usuário obrigatório.')]
    #[Validate('min:3', message: 'Nome de usuário deve ter no minimo 3 caracteres.')]
    #[Validate('max:20', message: 'Nome de usuário deve ter no máximo 20 caracteres.')]
    public string $username;

    #[Validate('required', message: 'E-mail obrigatório.')]
    #[Validate('email', message: 'Padrão de email inválido.')]
    #[Validate('unique:users,email', message: 'Este email já está cadastrado.')]
    public string $email;

    #[Validate('required', message: 'Senha obrigatório.')]
    #[Validate('min:8', message: 'Sua senha deve ter no minimo 8 caracteres.')]
    #[Validate('max:25', message: 'Sua senha deve ter no máximo 25 caracteres.')]
    public string $password;

    #[Validate('required', message: 'Confirmar senha obrigatório.')]
    #[Validate('same:password', message: 'Senha não coincide.')]
    public string $confirmPassword;
}
