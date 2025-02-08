<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Livewire\Forms\PasswordForm;
use App\Actions\ChangePasswordAction;

class PasswordChanger extends Component
{
    public $user;
    public PasswordForm $passwordForm;
    public bool $passwordModal = false;

    public function render()
    {
        return view('livewire.components.password-changer');
    }

    public function changerPassword(ChangePasswordAction $changePasswordAction)
    {
        $password = $this->passwordForm->validatePassword($this->user->password);
        if (!isNullOrEmpty($password)) {
            $changePasswordAction->execute($this->user, $password);
            $this->reset('passwordForm');
            $this->passwordModal = false;
        }
    }
}
