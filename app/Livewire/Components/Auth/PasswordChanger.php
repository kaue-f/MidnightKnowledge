<?php

namespace App\Livewire\Components\Auth;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\PasswordForm;
use Illuminate\Support\Facades\Auth;

class PasswordChanger extends Component
{
    public User $user;
    public PasswordForm $passwordForm;
    public bool $passwordModal = false;

    public function changerPassword()
    {
        $password = $this->passwordForm->validatePassword($this->user->password);

        if (!isNullOrEmpty($password)) {
            if (Auth::id() !== $this->user->id)
                return flash()->warning("Você não tem permissão alterar a senha dessa conta.");

            (Auth::user()->update(['password' => $password,]))
                ? flash()->success("Senha alterada com suceso.")
                : flash()->warning("Não foi possível alterar sua senha. Tente novamente mais tarde.");

            $this->reset('passwordForm');
            $this->passwordModal = false;
        }
    }
}
