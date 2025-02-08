<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class RegisterForm extends Form
{
    #[Validate('required', message: 'Nickname obrigatório.')]
    #[Validate('min:3', message: 'Nickname deve ter no minimo 3 caracteres.')]
    #[Validate('max:20', message: 'Nickname deve ter no máximo 20 caracteres.')]
    #[Validate('unique:users,username', message: 'Nickname já está cadastrado.')]
    public string $nickname;

    #[Validate('required', message: 'E-mail obrigatório.')]
    #[Validate('email', message: 'Padrão de email inválido.')]
    #[Validate('unique:users,email', message: 'Este email já está cadastrado.')]
    public string $email;

    #[Validate('required', message: 'Senha obrigatório.')]
    #[Validate('min:8', message: 'Sua senha deve ter no minimo 8 caracteres.')]
    #[Validate('max:25', message: 'Sua senha deve ter no máximo 25 caracteres.')]
    #[Validate('regex:/[a-z]/', message: 'Sua senha precisa conter pelo menos uma letra minúscula.')]
    #[Validate('regex:/[A-Z]/', message: 'Sua senha precisa conter pelo menos uma letra maiúscula.')]
    #[Validate('regex:/[0-9]/', message: 'Sua senha precisa conter pelo menos um número.')]
    #[Validate('regex:/[@$!%*?&]/', message: 'Sua senha precisa conter pelo menos um caractere especial.')]
    public string $password;

    #[Validate('required', message: 'Confirmar senha obrigatório.')]
    #[Validate('min:8', message: 'Sua senha deve ter no minimo 8 caracteres.')]
    #[Validate('max:25', message: 'Sua senha deve ter no máximo 25 caracteres.')]
    #[Validate('same:password', message: 'Senha não coincide.')]
    public string $confirmPassword;
}
