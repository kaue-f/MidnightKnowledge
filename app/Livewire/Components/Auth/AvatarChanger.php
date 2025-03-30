<?php

namespace App\Livewire\Components\Auth;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Laravel\Facades\Image;

class AvatarChanger extends Component
{
    use WithFileUploads;
    #[Validate([
        'image' => 'required|image|max:2560|mimes:jpg,jpeg,png',
    ], message: [
        'required' => 'Imagem de perfil é obrigatória.',
        'image' => 'O arquivo enviado deve ser uma imagem válida.',
        'max:2560' => 'A imagem deve ter no máximo 2.50MB.',
        'mimes:jpg,jpeg,png,webp' => 'Imagem deve ser no formato: jpg, jpeg, png ou webp.',
    ])]
    public $image;
    public string $path = 'avatars';
    public string $avatar;
    public User $user;
    public array $config = ['guides' => false];

    public function changeImage()
    {
        $this->validate();

        if (Storage::exists($this->path))
            Storage::makeDirectory($this->path);

        $imageWebp = Image::read($this->image);
        $path = "$this->path/{$this->user->id}.webp";

        if (!Storage::put($path, $imageWebp->toWebp(80)))
            return notyf()->warning("Não foi possível atualizada imagem de perfil.");

        if (Auth::user()->update(['image' => $path]))
            notyf()->success("Imagem de perfil atualizada.");

        $this->dispatch('updateAvatar');
    }
}
