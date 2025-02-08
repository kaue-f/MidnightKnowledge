<?php

namespace App\Livewire\Components;

use Livewire\Component;
use App\Actions\DeleteUserAction;

class DeleteAccount extends Component
{
    public $user;
    public bool $modalUserDelete = false;
    public function render()
    {
        return view('livewire.components.delete-account');
    }

    public function deleteUser(DeleteUserAction $deleteUserAction)
    {
        $deleteUserAction->execute($this->user);
        $this->modalUserDelete = false;
    }
}
