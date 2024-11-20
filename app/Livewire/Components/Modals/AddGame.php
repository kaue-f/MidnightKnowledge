<?php

namespace App\Livewire\Components\Modals;

use App\DTO\GameDTO;

use App\Http\Controllers\GameController;
use Livewire\Attributes\Reactive;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddGame extends Component
{
    use WithFileUploads;
    #[Validate([
        'gameDTO.title' => 'required|min:3|max:100|unique:games,title',
        'gameDTO.genres' => 'required|max:20',
        'gameDTO.platforms' => 'required|max:20',
        'gameDTO.classification' => 'required',
        'gameDTO.image' => 'nullable|image|max:2048',
        'gameDTO.synopsis' => 'nullable|min:20|max:500',
        'gameDTO.duration' => 'nullable',
        'gameDTO.release_date' => 'nullable',
        'gameDTO.developed_by' => 'nullable|min:3|max:50',
    ], message: [
        'gameDTO.title.required' => 'O título é obrigatório.',
        'gameDTO.title.min' => 'O título deve conter no mínimo 3 caracteres.',
        'gameDTO.title.max' => 'O título deve conter no máximo 100 caracteres.',
        'gameDTO.title.unique' => 'Já existe um jogo cadastrado com este título.',
        'gameDTO.genres.required' => 'Selecione pelo menos um gênero.',
        'gameDTO.genres.max' => 'Você pode selecionar no máximo 20 gêneros.',
        'gameDTO.platforms.required' => 'Selecione pelo menos uma plataforma.',
        'gameDTO.platforms.max' => 'Você pode selecionar no máximo 20 plataformas.',
        'gameDTO.classification.required' => 'A classificação etária é obrigatória.',
        'gameDTO.image.image' => 'O arquivo enviado deve ser uma imagem válida.',
        'gameDTO.image.max' => 'A imagem deve ter no máximo 2MB.',
        'gameDTO.synopsis.min' => 'A sinopse deve conter no mínimo 20 caracteres.',
        'gameDTO.synopsis.max' => 'A sinopse deve conter no máximo 500 caracteres.',
        'gameDTO.developed_by.min' => 'O nome da desenvolvedora deve conter no mínimo 3 caracteres.',
        'gameDTO.developed_by.max' => 'O nome da desenvolvedora deve conter no máximo 50 caracteres.'
    ])]
    public array $gameDTO;
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

    public function mount()
    {
        $this->gameDTO = (array) new GameDTO();
    }

    public function save(GameController $gameController)
    {
        $this->validate();
        try {
            $game = $gameController->create($this->gameDTO);
            (isNullOrEmpty($game))
                ? "Não foi possível cadastrar o game inserido."
                : "Game {$game['title']} foi adicionado ao acervo Midnight Knowledge.";
            return $this->redirect('/games', navigate: true);
        } catch (\Throwable $th) {
        }
    }
}
