<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\DTO\PlatformsDTO;
use App\Models\Game\Game;
use App\Models\Genre;
use App\Services\CacheService;
use Livewire\Attributes\Title;
use Livewire\WithoutUrlPagination;
use Livewire\WithPagination;

class Games extends Component
{
    use WithPagination, WithoutUrlPagination;
    private $games;
    public string $search = '';
    public $genres;
    public array $genre = [];
    public array $platforms;
    public array $plataform = [];
    public array $classifications;
    public array $classification = [];
    public array $sortBy = ['column' => 'title', 'direction' => 'asc'];
    public int $paginate = 15;
    public bool $modalGame = false;

    #[Title('Games')]
    public function render()
    {
        return view('livewire.pages.games', [
            'games' => $this->games
        ]);
    }

    public function mount(CacheService $cacheService, PlatformsDTO $platformsDTO)
    {
        $this->genres = $cacheService->getGamesGenre();
        $this->classifications = $cacheService->getClassifications();
        $this->platforms = $platformsDTO->get();
        $this->games = $this->gamesQuery()->orderBy('title')->paginate($this->paginate);
    }

    public function gamesQuery()
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
            });
    }

    public function filter($assortment = NULL)
    {
        if (!isNullOrEmpty($assortment))
            $this->sortBy = orderSortBy($this->sortBy, $assortment);

        $this->games = $this->gamesQuery()
            ->orderBy(...array_values($this->sortBy))
            ->paginate($this->paginate);
    }

    public function resetFilter()
    {
        $this->reset();
        $this->games = $this->gamesQuery()
            ->orderBy(...array_values($this->sortBy))
            ->paginate($this->paginate);
    }
}
