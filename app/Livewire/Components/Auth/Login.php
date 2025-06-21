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
                'Parece que esse e-mail ou nickname não está cadastrado. Verifique e tente novamente.'
            );
        }

        if (
            Auth::attempt(['email' => $this->loginForm->user, 'password' => $this->loginForm->password], $this->loginForm->remember) ||
            Auth::attempt(['nickname' => $this->loginForm->user, 'password' => $this->loginForm->password], $this->loginForm->remember)
        ) {
            Session::regenerate();
            flash()->success("Bem-vindo de volta ao Midnight Knowledge!");
            return redirect('/');
        } else {
            $this->addError(
                'loginForm.user',
                'Usuário ou senha inválidos. Verifique e tente novamente.'
            );
            $this->addError(
                'loginForm.password',
                'Usuário ou senha inválidos. Verifique e tente novamente.'
            );
        }
    }
}
