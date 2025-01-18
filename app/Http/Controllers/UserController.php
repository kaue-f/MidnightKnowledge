<?php

namespace App\Http\Controllers;

use App\Livewire\Forms\UserDTO;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public Request $request;
    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function update($id, UserDTO $userDTO)
    {
        $user = User::find($id);

        if (isNullOrEmpty($user))
            return notyf()->warning("Não foi possível encontra informações do usuário. Tente novamente mais tarde.");

        $arr = [
            'username' => isNullOrEmpty($userDTO->username) ? $user->username : $userDTO->username,
            'name' => $userDTO->name,
            'email' => isNullOrEmpty($userDTO->email) ? $user->email : $userDTO->email,
            'birthday' => isNullOrEmpty($userDTO->birthday) ? NULL : $userDTO->birthday,
        ];

        return ($user->update($arr))
            ? notyf()->success("Informações atualizada com sucesso.")
            : notyf()->error("Não foi possível atualizar suas informações. Tente novamente mais tarde.");
    }

    public function password($id, $password)
    {
        $user = User::find($id);
        if ($user->update(['password' => $password])) {
            $this->request->session()->passwordConfirmed();
            notyf()->success("Senha alterada com suceso.");
            return;
        }

        notyf()->error("Não foi possível alterar sua senha. Tente novamente mais tarde.");
        return;
    }

    public function delete($id)
    {
        if (User::where('id', $id)->delete()) {
            Auth::logout();
            $this->request->session()->invalidate();
            $this->request->session()->regenerateToken();
            notyf()->info("Conta excluída com sucesso. Sentiremos sua falta! 💙");
            return redirect('/');
        }
        return notyf()->error("Não foi possível excluir sua conta. Tente novamente mais tarde.");
    }
}
