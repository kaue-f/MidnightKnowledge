<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChangePasswordAction
{
    public function __construct(private readonly Request $request) {}

    public function execute(User $user, $password)
    {
        if (Auth::id() !== $user->id)
            return notyf()->warning("Você não tem permissão alterar a senha dessa conta.");

        $user->password = $password;
        if ($user->save()) {
            Auth::login($user);
            $this->request->session()->regenerate();
            return notyf()->success("Senha alterada com suceso.");
        }

        return notyf()->warning("Não foi possível alterar sua senha. Tente novamente mais tarde.");
    }
}
