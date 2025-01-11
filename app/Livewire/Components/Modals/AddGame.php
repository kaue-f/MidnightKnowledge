<?php

namespace App\Livewire\Components\Modals;

use App\Http\Controllers\GameController;
use App\Livewire\Forms\GameDTO;
use Livewire\Attributes\Modelable;
use Livewire\Attributes\Reactive;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddGame extends Component
{
    use WithFileUploads;
    public GameDTO $gameDTO;
    #[Reactive]
    public $genres;
    #[Reactive]
    public $platforms;
    #[Reactive]
    public $classifications;
    #[Modelable]
    public bool $modalGame = false;
    public function render()
    {
        return view('livewire.components.modals.add-game', [
            'genres' => $this->genres,
            'platforms' => $this->platforms,
            'classifications' => $this->classifications,
        ]);
    }

    public function mount() {}

    public function save(GameController $gameController)
    {
        $this->validate();
        try {
            $gameController->create($this->gameDTO);
            $this->modalGame = false;
        } catch (\Throwable $th) {
            notyf()->warning("Falha no cadastrameto do game inserido. Verifique os dados e tente novamente.");
        }
    }

    public function close()
    {
        $this->gameDTO->resetForm();
        $this->modalGame = false;
    }
}
