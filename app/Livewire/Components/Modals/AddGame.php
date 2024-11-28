<?php

namespace App\Livewire\Components\Modals;

use App\Http\Controllers\GameController;
use App\Livewire\Forms\GameDTO;
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
    public function render()
    {
        return view('livewire.components.modals.add-game', [
            'genres' => $this->genres,
            'platforms' => $this->platforms,
            'classifications' => $this->classifications,
        ]);
    }

    public function save(GameController $gameController)
    {
        $this->validate();
        try {
            $game = $gameController->create($this->gameDTO->all());
            (isNullOrEmpty($game))
                ? "Não foi possível cadastrar o game inserido."
                : "Game {$game['title']} foi adicionado ao acervo Midnight Knowledge.";
            return $this->redirect('/games', navigate: true);
        } catch (\Throwable $th) {
        }
    }
}
