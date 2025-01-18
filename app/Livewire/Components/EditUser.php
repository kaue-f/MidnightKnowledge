<?php

namespace App\Livewire\Components;

use App\Http\Controllers\UserController;
use App\Livewire\Forms\UserDTO;
use Livewire\Component;

class EditUser extends Component
{
    public UserDTO $userDTO;
    public $user;
    public bool $modalUser;
    public $config = [
        'dateFormat' => 'Y-m-d',
        'altFormat' => 'd/F/Y',
        'locale' => 'pt',
        'maxDate' => 'today',
    ];

    public function render()
    {
        return view('livewire.components.edit-user');
    }

    public function mount()
    {
        $this->userDTO->setUser($this->user);
    }

    public function edit(UserController $userController)
    {
        $this->validate();
        $userController->update($this->user->id, $this->userDTO);
        $this->modalUser = false;
    }
}
