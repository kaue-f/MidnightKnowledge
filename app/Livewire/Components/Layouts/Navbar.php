<?php

namespace App\Livewire\Components\Layouts;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Actions\LogoutAction;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public bool $showDrawer = false;
    public string $avatar;
    public string $name = "Convidado";

    public function mount()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $this->avatar = $user->image ?? imageNoneUser();
            $this->name =  $user->nickname;
        } else {
            $this->avatar = imageNoneUser();
        }
    }

    public function logout(LogoutAction $logout)
    {
        $logout();
        flash()->info("Você foi desconectado com sucesso. Até logo!");
    }

    #[On('updateAvatar')]
    public function changeAvatar()
    {
        $this->avatar = Auth::user()->image;
    }
}
