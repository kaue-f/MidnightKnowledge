<?php

namespace App\Livewire\Components\Auth;

use App\Models\User;
use Livewire\Component;
use App\Actions\LogoutAction;
use Illuminate\Support\Facades\Auth;

class DeleteAccount extends Component
{
    public User $user;
    public bool $modalUserDelete = false;

    public function deleteUser(LogoutAction $logout)
    {
        if (Auth::id() !== $this->user->id)
            return flash()->warning("Você não tem permissão para excluir esta conta.");

        if ($this->user->delete()) {
            $logout();
            flash()->info("Conta excluída com sucesso. Sentiremos sua falta! 💙");
        }

        $this->modalUserDelete = false;
        return flash()->warning("Não foi possível excluir sua conta. Tente novamente mais tarde.");
    }
}
