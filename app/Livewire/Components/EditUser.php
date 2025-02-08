<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Livewire\Forms\UserForm;
use App\Actions\UpdateUserAction;

class EditUser extends Component
{
    public UserForm $userForm;
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
        $this->userForm->setUser($this->user);
    }

    public function edit(UpdateUserAction $updateUserAction)
    {
        $this->validate();
        $updateUserAction->execute($this->user, $this->userForm);
        $this->modalUser = false;
    }
}
