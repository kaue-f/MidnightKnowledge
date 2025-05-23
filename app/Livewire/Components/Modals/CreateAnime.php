<?php

namespace App\Livewire\Components\Modals;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\AnimeForm;
use Illuminate\Support\Collection;
use Livewire\Attributes\Modelable;
use App\Services\Managements\AnimeService;

class CreateAnime extends Component
{
    use WithFileUploads;
    #[Modelable]
    public bool $modalAnime = false;
    public AnimeForm $animeForm;
    public ?User $user;
    public Collection $genres;
    public array $classifications;
    public array $animeTypes;

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
        'placeholder' => 'Sinopse do anime...',
        'status' => false,
        'forceSync' => true,
        'plugins' => 'autoresize',
    ];

    public function save(AnimeService $anime)
    {
        $this->validate();
        try {
            $anime->create($this->animeForm, $this->user);
            $this->close();
        } catch (\Throwable $th) {
            notyf()->error("Falha no cadastramento do anime inserido. Verifique os dados e tente novamente.");
        }
    }

    public function close()
    {
        $this->animeForm->resetForm();
        $this->modalAnime = false;
    }
}
