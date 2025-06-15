<?php

namespace App\Livewire\Components\Modals;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\GameForm;
use Illuminate\Support\Collection;
use Livewire\Attributes\Modelable;
use App\Services\Management\GameService;

class CreateGame extends Component
{
    use WithFileUploads;
    public ?User $user;
    public array $platforms;
    public array $classifications;
    public GameForm $gameForm;
    public Collection $genres;
    public array $developers;
    #[Modelable]
    public bool $modalGame = false;
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
        'placeholder' => 'Sinopse do game...',
        'status' => false,
        'forceSync' => true,
        'plugins' => 'autoresize',
    ];

    public function save(GameService $game)
    {
        $this->validate();
        try {
            $game->create($this->gameForm, $this->user);
            $this->close();
        } catch (\Throwable $th) {
            notyf()->error("Falha no cadastramento do game inserido. Verifique os dados e tente novamente.");
        }
    }

    public function close()
    {
        $this->gameForm->resetForm();
        $this->modalGame = false;
    }
}
