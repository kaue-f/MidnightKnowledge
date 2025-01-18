<?php

namespace App\Livewire\Components;

use App\Http\Controllers\UserAvatarController;
use App\Http\Controllers\UserController;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;
use Mary\Traits\WithMediaSync;

class AvatarChanger extends Component
{
    use WithFileUploads;
    #[Validate([
        'image' => 'required|image|max:2560|mimes:jpg,jpeg,png',
    ], message: [
        'required' => 'Imagem de perfil é obrigatória.',
        'image' => 'O arquivo enviado deve ser uma imagem válida.',
        'max:2560' => 'A imagem deve ter no máximo 2.50MB.',
        'mimes:jpg,jpeg,png' => 'Imagem deve ser no formato: jpg, jpeg ou png.',
    ])]
    public $image;
    public string $avatar;
    public $user;
    public array $config = ['guides' => false];

    public function render()
    {
        return view('livewire.components.avatar-changer');
    }

    public function changeImage(UserAvatarController $useAvatarrController)
    {
        $this->validate();
        $useAvatarrController->updateImage($this->user->id, $this->image);
        $this->image = "";
        $this->dispatch('updateAvatar');
    }
}
