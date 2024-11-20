<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\DTO\PlataformDTO;
use App\Model\Classification;
use App\Model\Game\Game;
use App\Model\Genre;
use Livewire\Attributes\Title;
use Livewire\Attributes\Layout;

class Games extends Component
{
    public string $search = '';
    public array $genre = [];
    public array $plataform = [];
    public array $classification = [];
    public array $sortBy = ['column' => 'title', 'direction' => 'asc'];
    public bool $modalGame = false;

    #[Layout('components.layouts.app')]
    #[Title('Games')]
    public function render()
    {
        return view('livewire.pages.games', [
            'genres' => $this->genres(),
            'platforms' => $this->platforms(),
            'classifications' => $this->classifications(),
            'games' => $this->games()
        ]);
    }

    public function games()
    {
        return Game::query()->select('games.*')
            ->with(['genres', 'platforms'])
            ->withAvg('ratings as average_rating', 'rating')
            ->when($this->search, function ($query) {
                $query->where('title', 'like', "%{$this->search}%");
            })
            ->when($this->genre, function ($query) {
                $query->whereHas('genres', function ($query) {
                    $query->whereIn('genres.id', $this->genre);
                });
            })
            ->when($this->plataform, function ($query) {
                $query->whereHas('platforms', function ($query) {
                    $query->whereIn('plataform', $this->plataform);
                });
            })
            ->when($this->classification, function ($query) {
                $query->whereIn('classification_id', $this->classification);
            })
            ->when(
                $this->sortBy['column'] === 'rating',
                function ($query) {
                    $query->leftJoin('game_ratings', 'games.id', '=', 'game_ratings.game_id')
                        ->selectRaw('AVG(game_ratings.rating) as average_rating')
                        ->groupBy('games.id')
                        ->orderBy('average_rating', $this->sortBy['direction']);
                },
                function ($query) {
                    $query->orderBy($this->sortBy['column'], $this->sortBy['direction']);
                }
            )
            ->get();
    }

    public function genres()
    {
        return Genre::where('category', 'Games')
            ->orderBy('genre', 'asc')
            ->get();
    }

    public function platforms()
    {
        $platforms = new PlataformDTO();
        return $platforms->plataforms;
    }

    public function classifications()
    {
        return Classification::get();
    }

    public function filter()
    {
        $this->games();
    }

    public function resetFilter()
    {
        $this->reset();
    }
}
