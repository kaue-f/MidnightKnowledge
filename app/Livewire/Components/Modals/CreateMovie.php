<?php

namespace App\Livewire\Components\Modals;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\MovieForm;
use Illuminate\Support\Collection;
use Livewire\Attributes\Modelable;
use App\Services\Management\MovieService;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class CreateMovie extends Component
{
    use WithFileUploads;
    #[Modelable]
    public bool $modalMovie = false;
    public ?User $user;
    public array $classifications;
    public MovieForm $movieForm;
    public Collection $genres;
    public array $config = [
        'dateFormat' => 'Y-m-d',
        'altFormat' => 'd F Y',
        'locale' => 'pt',
    ];
    public array $configSynopsis = [
        'inputStyle' => 'contenteditable',
        'toolbar' => ['heading', 'bold', 'italic'],
        'statusbar' => false,
        'maxHeight' => '125px',
        'uploadImage' => false,
        'placeholder' => 'Sinopse do filme...',
        'status' => false,
        'forceSync' => true,
        'plugins' => 'autoresize',
    ];

    public function save(MovieService $movie)
    {
        $this->validate();
        try {
            $movie->create($this->movieForm, $this->user);
            $this->close();
        } catch (\Throwable $th) {
            notyf()->error("Falha no cadastramento do filme inserido. Verifique os dados e tente novamente.");
        }
    }

    public function close()
    {
        $this->movieForm->resetForm();
        $this->modalMovie = false;
    }
}
