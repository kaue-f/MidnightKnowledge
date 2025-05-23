<?php

namespace App\Livewire\Pages\Games;

use Livewire\Component;
use App\Models\Game\Game;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Services\Caches\GameCache;
use Illuminate\Support\Collection;
use Livewire\WithoutUrlPagination;
use App\Services\Caches\ClassificationCache;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $search = '';
    public Collection $genres;
    public array $genre = [];
    public array $platforms;
    public array $plataform = [];
    public array $classifications;
    public array $classification = [];
    public array $developers = [];
    public array $developer = [];
    public array $sortBy = ['column' => 'id', 'direction' => 'asc'];
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
        return view('livewire.pages.games.index', [
            'games' => $this->gamesQuery()
        ]);
    }

    public function mount(GameCache $gameCache)
    {
        $this->classifications = app(ClassificationCache::class)->fetch();
        $this->genres = $gameCache->getGenres();
        $this->platforms = $gameCache->getPlatforms();
        $this->developers = $gameCache->getDevelopers();
    }

    public function gamesQuery($assortment = NULL)
    {
        if (!isNullOrEmpty($assortment))
            $this->sortBy = orderSortBy($this->sortBy, $assortment);

        return Game::query()->select('games.*')
            ->with(['genres', 'platforms'])
            ->withAvg('ratings', 'rating')
            ->when($this->search, function ($query) {
                $query->whereLike('title',  "%$this->search%");
            })
            ->when($this->genre, function ($query) {
                $query->whereHas('genres', function ($query) {
                    $query->whereIn('genres.id', $this->genre);
                });
            })
            ->when($this->plataform, function ($query) {
                $query->whereHas('platforms', function ($query) {
                    $query->whereIn('platforms.id', $this->plataform);
                });
            })
            ->when($this->developer, function ($query) {
                $query->whereIn('developed_by', $this->developer);
            })
            ->when($this->classification, function ($query) {
                $query->whereIn('classification_id', $this->classification);
            })->orderBy(...array_values($this->sortBy))
            ->paginate($this->page);
    }

    public function resetFilter()
    {
        $this->reset('genre', 'plataform', 'classification', 'developer', 'search');
        $this->resetPage();
    }
}
