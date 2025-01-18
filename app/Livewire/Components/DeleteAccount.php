<?php

namespace App\Livewire\Components;

use App\Http\Controllers\UserController;
use Livewire\Component;

class DeleteAccount extends Component
{
    public $user;
    public bool $modalUserDelete = false;
    public function render()
    {
        return view('livewire.components.delete-account');
    }

    public function deleteUser(UserController $userController)
    {
        $userController->delete($this->user->id);
    }
}
