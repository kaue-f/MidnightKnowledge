<?php

namespace App\Actions;

use App\Models\User;
use App\Livewire\Forms\UserForm;
use Illuminate\Support\Facades\Auth;

class UpdateUserAction
{
    public function execute(User $user, UserForm $userForm)
    {
        if (Auth::id() !== $user->id)
            return notyf()->warning("Não foi possível encontra informações do usuário. Tente novamente mais tarde.");

        $arr = [
            'nickname' => isNullOrEmpty($userForm->nickname) ? $user->nickname : $userForm->nickname,
            'username' => isNullOrEmpty($userForm->username) ? $user->username : $userForm->username,
            'email' => isNullOrEmpty($userForm->email) ? $user->email : $userForm->email,
            'birthday' => isNullOrEmpty($userForm->birthday) ? $user->birthday ?? NULL : $userForm->birthday,
        ];

        return ($user->update($arr))
            ? notyf()->success("Informações atualizada com sucesso.")
            : notyf()->warning("Não foi possível atualizar suas informações. Tente novamente mais tarde.");
    }
}
