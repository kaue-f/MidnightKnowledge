<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class LoginForm extends Form
{
    #[Validate('required', message: 'components/auth/login.form.user.required')]
    #[Validate('min:3', message: 'components/auth/login.form.user.min')]
    public string $user = '';

    #[Validate('required', message: 'components/auth/login.form.password.required')]
    #[Validate('min:8', message: 'components/auth/login.form.password.min')]
    public string $password = '';

    public bool $remember = false;
}
