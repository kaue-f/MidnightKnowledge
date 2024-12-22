<?php

namespace App\Livewire\Components\Layouts;

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{
    public bool $showDrawer = false;
    public string $avatar;
    public string $name;
    public function render()
    {
        return view('livewire.components.layouts.navbar');
    }

    public function mount()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->avatar = $user->image ?? imageNoneUser();
            $this->name = $user->username ?? '';
        } else {
            $this->avatar = imageNoneUser();
            $this->name = "Convidado";
        }
    }

    public function logout(AuthController $authController)
    {
        try {
            $authController->logout();
        } catch (\Throwable $th) {
            notyf()->error("Não foi  possível desconecta usuário. Tente novamente mais tarde.");
        }
    }
}
