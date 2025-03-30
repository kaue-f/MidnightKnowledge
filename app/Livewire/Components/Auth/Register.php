<?php

namespace App\Livewire\Components\Auth;

use App\Enums\Role;
use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\RegisterForm;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\AuthController;

class Register extends Component
{
    public RegisterForm $registerForm;

    public function register()
    {
        $this->validate();

        try {
            $user = User::create([
                'nickname' => $this->registerForm->nickname,
                'email' => $this->registerForm->email,
                'password' => $this->registerForm->password,
                'role' => Role::MEMBER->name,
            ]);

            if (isNullOrEmpty($user)) {
                notyf()->warning("Falha ao criar sua conta. Verifique os dados e tente novamente.");
                return back();
            }

            Auth::login($user);
            Session::regenerate();
            notyf()->success("Seja bem-vindo ao Midnight Knowledge! Prepare-se para explorar um vasto acervo de animes, filmes, séries, livros, games e muito mais.");
            return redirect('/');
        } catch (\Throwable $th) {
            notyf()->error("Falha ao criar sua conta. Verifique os dados e tente novamente.");
            return back();
        }
    }
}
