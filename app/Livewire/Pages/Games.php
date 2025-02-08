<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Game\Game;
use Livewire\WithPagination;
use App\Services\CacheService;
use Livewire\Attributes\Title;
use Illuminate\Support\Collection;
use Livewire\WithoutUrlPagination;

class Games extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $search = '';
    public Collection $genres;
    public array $genre = [];
    public array $platforms;
    public array $plataform = [];
    public array $classifications;
    public array $classification = [];
    public array $sortBy = ['column' => 'title', 'direction' => 'asc'];
    public array $numbersPage = [
        ['id' => 10, 'name' => 10],
        ['id' => 15, 'name' => 15],
        ['id' => 30, 'name' => 30],
        ['id' => 50, 'name' => 50],
        ['id' => 75, 'name' => 75],
        ['id' => 100, 'name' => 100]
    ];
    public int $page = 15;
    public bool $modalGame = false;

    #[Title('Games')]
    public function render()
    {
        return view('livewire.pages.games', [
            'games' => $this->gamesQuery()
        ]);
    }

    public function mount(CacheService $cacheService)
    {
        $this->genres = $cacheService->getGamesGenre();
        $this->classifications = $cacheService->getClassifications();
        $this->platforms = $cacheService->getPlatforms();
    }

    public function gamesQuery($assortment = NULL)
    {
        if (!isNullOrEmpty($assortment))
            $this->sortBy = orderSortBy($this->sortBy, $assortment);

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
            })->orderBy(...array_values($this->sortBy))
            ->paginate($this->page);
    }

    public function resetFilter()
    {
        $this->reset('genre');
        $this->reset('plataform');
        $this->reset('classification');
        $this->resetPage();
    }
}
