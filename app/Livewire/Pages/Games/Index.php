<?php

namespace App\Livewire\Pages\Games;

use Livewire\Component;
use App\Models\Game\Game;
use App\Enums\ContentType;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Illuminate\Support\Collection;
use Livewire\WithoutUrlPagination;
use App\Traits\LoadsContentFilterData;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination, LoadsContentFilterData;
    public string $search = '';
    public Collection $genres;
    public array $platforms;
    public array $classifications;
    public array $developers = [];
    public array $filters = [
        'genre' => [],
        'plataform' => [],
        'classification' => [],
        'developer' => [],
    ];
    public array $sortBy = ['column' => 'id', 'direction' => 'asc'];
    public array $numbersPage = [
        ['id' => 10, 'name' => 10],
        ['id' => 15, 'name' => 15],
        ['id' => 30, 'name' => 30],
        ['id' => 50, 'name' => 50],
        ['id' => 75, 'name' => 75],
        ['id' => 100, 'name' => 100]
    ];
    public int $page = 24;
    public bool $modalGame = false;

    #[Title('Games')]
    public function render()
    {
        return view('livewire.pages.games.index', [
            'games' => $this->gamesQuery()
        ]);
    }

    public function mount()
    {
        $this->loadFiltersFor(ContentType::GAME);
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
            ->when($this->filters['genre'], function ($query) {
                $query->whereHas('genres', function ($query) {
                    $query->whereIn('genres.id', $this->filters['genre']);
                });
            })
            ->when($this->filters['classification'], function ($query) {
                $query->whereIn('classification_id', $this->filters['classification']);
            })
            ->tap(fn($query) => ContentType::GAME->applyFilters($query, $this->filters))
            ->orderBy(...array_values($this->sortBy))
            ->paginate($this->page);
    }

    public function resetFilter()
    {
        $this->reset('filters', 'search');
        $this->resetPage();
    }
}
