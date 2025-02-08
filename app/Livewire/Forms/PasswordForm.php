<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Hash;

class PasswordForm extends Form
{
    #[Validate('required', message: 'Senha atual obrigatório.')]
    #[Validate('min:8', message: 'Sua senha deve ter no minimo 8 caracteres.')]
    #[Validate('max:25', message: 'Sua senha deve ter no máximo 25 caracteres.')]
    public string $currentPassword;

    #[Validate('required', message: 'Senha obrigatório.')]
    #[Validate('min:8', message: 'Sua senha deve ter no minimo 8 caracteres.')]
    #[Validate('max:25', message: 'Sua senha deve ter no máximo 25 caracteres.')]
    #[Validate('regex:/[a-z]/', message: 'Sua senha precisa conter pelo menos uma letra minúscula, uma letra maiúscula, um número e um caractere especial.')]
    #[Validate('regex:/[A-Z]/', message: 'Sua senha precisa conter pelo menos uma letra minúscula, uma letra maiúscula, um número e um caractere especial.')]
    #[Validate('regex:/[0-9]/', message: 'Sua senha precisa conter pelo menos uma letra minúscula, uma letra maiúscula, um número e um caractere especial.')]
    #[Validate('regex:/[@$!%*?&]/', message: 'Sua senha precisa conter pelo menos uma letra minúscula, uma letra maiúscula, um número e um caractere especial.')]
    public string $password;

    #[Validate('required', message: 'Confirmar senha obrigatório.')]
    #[Validate('min:8', message: 'Sua senha deve ter no minimo 8 caracteres.')]
    #[Validate('max:25', message: 'Sua senha deve ter no máximo 25 caracteres.')]
    #[Validate('same:password', message: 'Senha não coincide.')]
    public string $confirmPassword;

    public function validatePassword($oldPassword)
    {
        $this->validate();
        if (!Hash::check($this->currentPassword, $oldPassword)) {
            $this->addError(
                'currentPassword',
                'A senha informada não corresponde à senha atual cadastrada. Por favor, tente novamente.'
            );
            return;
        } else if ($this->password == $this->currentPassword) {
            $this->addError(
                'password',
                'Nova senha não pode ser igual a senha atual. Insirar outra senha.'
            );
            return;
        }

        return $this->password;
    }
}
