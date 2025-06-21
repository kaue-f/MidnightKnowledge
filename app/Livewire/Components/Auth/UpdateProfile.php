<?php

namespace App\Livewire\Components\Auth;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\UserForm;
use Illuminate\Support\Facades\Auth;

class UpdateProfile extends Component
{
    public UserForm $userForm;
    public User $user;
    public bool $modalUser;
    public array $config = [
        'dateFormat' => 'Y-m-d',
        'altFormat' => 'd/F/Y',
        'locale' => 'pt',
        'maxDate' => 'today',
    ];

    public function mount()
    {
        $this->userForm->setUser($this->user);
    }

    public function update()
    {
        $user = $this->validate();

        if (Auth::id() !== $this->user->id)
            return flash()->warning("Não foi possível encontra informações do usuário. Tente novamente mais tarde.");

        $this->user->fill($user);

        ($this->user->save())
            ? flash()->success("Informações atualizada com sucesso.")
            : flash()->warning("Não foi possível atualizar suas informações. Tente novamente mais tarde.");

        $this->modalUser = false;
    }
}
