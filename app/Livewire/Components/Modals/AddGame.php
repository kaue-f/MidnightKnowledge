<?php

namespace App\Livewire\Components\Modals;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Livewire\Forms\GameDTO;
use Livewire\Attributes\Modelable;
use App\Http\Controllers\GameController;

class AddGame extends Component
{
    use WithFileUploads;
    public GameDTO $gameDTO;
    public $genres;
    public array $platforms;
    public array $classifications;
    #[Modelable]
    public bool $modalGame = false;
    public function render()
    {
        return view('livewire.components.modals.add-game');
    }

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
