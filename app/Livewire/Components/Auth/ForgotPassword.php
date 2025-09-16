<?php

namespace App\Livewire\Components\Auth;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Password;

class ForgotPassword extends Component
{
    #[Validate(
        rule: ['required', 'email'],
        message: [
            'required' => 'components/auth/forgot-password.form.email.required',
            'email' => 'components/auth/forgot-password.form.email.email'
        ]
    )]
    public string $email = '';

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.components.auth.forgot-password')
            ->title(trans('titles.reset_password'));
    }

    public function sendResetLink()
    {
        $this->validate();

        $status = Password::sendResetLink(['email' => $this->email]);

        if ($status === Password::RESET_LINK_SENT) {
            flash()->info(trans('components/auth/forgot-password.messages.sent'));
            return redirect()->route('password.request');
        }

        $this->addError('email', trans('components/auth/forgot-password.messages.error'));
    }
}
