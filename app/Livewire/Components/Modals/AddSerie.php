<?php

namespace App\Livewire\Components\Modals;

use App\Models\User;
use Livewire\Component;
use App\Livewire\Forms\SerieForm;
use Illuminate\Support\Collection;
use Livewire\Attributes\Modelable;
use App\Services\Managements\SerieService;
use Livewire\Features\SupportFileUploads\WithFileUploads;

class AddSerie extends Component
{
    use WithFileUploads;
    #[Modelable]
    public bool $modalSerie = false;
    public ?User $user;
    public array $classifications;
    public SerieForm $serieForm;
    public Collection $genres;
    public array $config = [
        'dateFormat' => 'Y-m-d',
        'altFormat' => 'd F Y',
        'locale' => 'pt',
    ];
    public array $configSynopsis = [
        'inputStyle' => 'contenteditable',
        'toolbar' => false,
        'statusbar' => false,
        'maxHeight' => '125px',
        'uploadImage' => false,
        'placeholder' => 'Sinopse do game...',
        'status' => false,
        'forceSync' => true,
        'plugins' => 'autoresize',
    ];

    public function save(SerieService $serie)
    {
        $this->validate();
        try {
            $serie->create($this->serieForm, $this->user);
            $this->close();
        } catch (\Throwable $th) {
            notyf()->error("Falha no cadastramento da série inserido. Verifique os dados e tente novamente.");
        }
    }

    public function close()
    {
        $this->serieForm->resetForm();
        $this->modalSerie = false;
    }
}
