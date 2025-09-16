<?php

namespace App\Livewire\Components\Auth;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Auth\Events\PasswordReset;

class ResetPassword extends Component
{
    #[Validate('required')]
    public string $token;
    #[Validate(
        rule: ['required', 'email'],
        message: [
            'required' => 'components/auth/reset-password.form.email.required',
            'email' => 'components/auth/reset-password.form.email.email'
        ]
    )]
    public string $email = '';
    #[Validate(
        rule: ['required', 'min:8', 'max:25', 'regex:/[a-z]/', 'regex:/[A-Z]/', 'regex:/[0-9]/', 'regex:/[@$!%*?&]/', 'confirmed'],
        message: [
            'required' => 'components/auth/reset-password.form.password.required',
            'min:8' => 'components/auth/reset-password.form.password.min',
            'max:25' => 'components/auth/reset-password.form.password.max',
            'regex:/[a-z]/' => 'components/auth/reset-password.form.password.regex_lowercase',
            'regex:/[A-Z]/' => 'components/auth/reset-password.form.password.regex_uppercase',
            'regex:/[0-9]/' => 'components/auth/reset-password.form.password.regex_number',
            'regex:/[@$!%*?&]/' => 'components/auth/reset-password.form.password.regex_special_character',
            'confirmed' => 'components/auth/reset-password.form.password.confirmed',
        ]
    )]
    public string $password = '';
    public string $password_confirmation = '';

    #[Layout('components.layouts.guest')]
    public function render()
    {
        return view('livewire.components.auth.reset-password');
    }

    public function mount()
    {
        $this->email = request()->query('email');
    }

    public function resetPassword()
    {
        $this->validate();

        $status = Password::reset(
            credentials: [
                'email' => $this->email,
                'password' => $this->password,
                'password_confirmation' => $this->password_confirmation,
                'token' => $this->token,
            ],
            callback: function ($user, $password) {
                $user->password = $password;
                $user->setRememberToken(Str::random(60));
                $user->save();

                event(new PasswordReset($user));

                Auth::login($user);
            }
        );

        if ($status === Password::PASSWORD_RESET) {
            flash()->success(trans('components/auth/reset-password.messages.reset'));
            return redirect()->route('home');
        }

        $this->addError('email', trans('components/auth/reset-password.messages.error'));
    }
}
