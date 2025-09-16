<?php

namespace App\Livewire\Forms;

use Livewire\Form;
use Livewire\Attributes\Validate;

class RegisterForm extends Form
{
    #[Validate('required', message: 'components/auth/register.form.nickname.required')]
    #[Validate('min:3', message: 'components/auth/register.form.nickname.min')]
    #[Validate('max:20', message: 'components/auth/register.form.nickname.max')]
    #[Validate('unique:users,username', message: 'components/auth/register.form.nickname.unique')]
    public string $nickname = '';

    #[Validate('required', message: 'components/auth/register.form.email.required')]
    #[Validate('email', message: 'components/auth/register.form.email.email')]
    #[Validate('unique:users,email', message: 'components/auth/register.form.email.unique')]
    public string $email = '';

    #[Validate('required', message: 'components/auth/register.form.password.required')]
    #[Validate('min:8', message: 'components/auth/register.form.password.min')]
    #[Validate('max:25', message: 'components/auth/register.form.password.max')]
    #[Validate('regex:/[a-z]/', message: 'components/auth/register.form.password.regex_lowercase')]
    #[Validate('regex:/[A-Z]/', message: 'components/auth/register.form.password.regex_uppercase')]
    #[Validate('regex:/[0-9]/', message: 'components/auth/register.form.password.regex_number')]
    #[Validate('regex:/[@$!%*?&]/', message: 'components/auth/register.form.password.regex_special_character')]
    #[Validate('confirmed', 'components/auth/register.form.password.confirmed')]
    public string $password = '';
    public string $password_confirmation = '';
}
