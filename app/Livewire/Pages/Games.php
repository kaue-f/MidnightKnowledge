<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\DTO\PlatformsDTO;
use App\Models\Classification;
use App\Models\Game\Game;
use App\Models\Genre;
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

    #[Title('Games')]
    public function render()
    {
        return view('livewire.pages.games', [
            'genres' => $this->genres(),
            'platforms' => PlatformsDTO::getPlatforms(),
            'classifications' => $this->classifications(),
            'games' => $this->games()
        ]);
    }

    public function games()
    {
        return Game::query()->select('games.*')
            ->with(['genres', 'platforms'])
            ->withAvg('ratings', 'rating')
            ->when($this->search, function ($query) {
                $query->where('title', 'LIKE', "%$this->search%");
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
            })->orderBy(
                $this->sortBy['column'] === 'rating' ? 'ratings_avg_rating' : $this->sortBy['column'],
                $this->sortBy['direction']
            )
            ->paginate(15);
    }

    public function genres()
    {
        return Genre::where('category', 'Games')
            ->orderBy('genre', 'asc')
            ->get();
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
