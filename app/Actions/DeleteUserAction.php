<?php

namespace App\Actions;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DeleteUserAction
{
    public function __construct(private readonly Request $request) {}

    public function execute(User $user)
    {
        if (Auth::id() !== $user->id)
            return notyf()->warning("Você não tem permissão para excluir esta conta.");

        if ($user->delete()) {
            Auth::logout();
            $this->request->session()->invalidate();
            $this->request->session()->regenerateToken();

            notyf()->info("Conta excluída com sucesso. Sentiremos sua falta! 💙");
            return redirect('/');
        }

        return notyf()->warning("Não foi possível excluir sua conta. Tente novamente mais tarde.");
    }
}
