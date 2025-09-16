<?php

namespace App\Livewire\Components\Auth;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\LoginForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class Login extends Component
{
    public LoginForm $loginForm;

    public function login()
    {
        $this->validate();

        $user = User::where('email', $this->loginForm->user)
            ->orWhere('nickname', $this->loginForm->user)
            ->first();

        if (isNullOrEmpty($user)) {
            return $this->addError(
                'loginForm.user',
                trans('components/auth/login.form.unregistered')
            );
        }

        if (
            Auth::attempt(['email' => $this->loginForm->user, 'password' => $this->loginForm->password], $this->loginForm->remember) ||
            Auth::attempt(['nickname' => $this->loginForm->user, 'password' => $this->loginForm->password], $this->loginForm->remember)
        ) {

            if (!Auth::user()->hasVerifiedEmail()) {
                Auth::user()->sendEmailVerificationNotification();
                flash()->warning(trans('components/auth/verify-email.alert'));
                return redirect()->route('verification.notice');
            }

            Session::regenerate();
            flash()->success(trans('components/auth/login.messages.success'));
            return redirect('/');
        } else {
            $this->addError(
                'loginForm.user',
                trans('components/auth/login.form.invalid')
            );
            $this->addError(
                'loginForm.password',
                trans('components/auth/login.form.invalid')
            );
        }
    }
}
