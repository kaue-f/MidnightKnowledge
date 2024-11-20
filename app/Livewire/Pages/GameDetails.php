<?php

namespace App\Livewire\Pages;

use App\Enums\Status;
use App\Model\Classification;
use App\Model\Game\Game;
use Livewire\Component;

class GameDetails extends Component
{
    public Game $game;
    public array $ratings = ['avg' => 0, 'rating' => 0, 'open' => false];
    public bool $favorite = false;
    public bool $library = false;
    public string $status;
    public function render()
    {
        return view('livewire.pages.game-details', [
            'statuses' => Status::array(),
            'classification' => Classification::find($this->game->classification_id)
        ])->title($this->game->title);
    }

    public function mount()
    {
        $this->ratings['avg'] = $this->game->ratings()->avg('rating') ?? 0;
    }
    public function handleLibrary($library, $status = null)
    {
        return;
    }

    public function updatedFavorite() {}

    public function updateRatings()
    {
        $this->ratings['open'] = false;
    }

    public function handleStatus($status) {}
}
