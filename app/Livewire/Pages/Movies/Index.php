<?php

namespace App\Livewire\Pages\Movies;

use Livewire\Component;
use App\Enums\ContentType;
use App\Models\Movie\Movie;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Illuminate\Support\Collection;
use App\Traits\LoadsContentFilterData;
use Livewire\Features\SupportPagination\WithoutUrlPagination;

class Index extends Component
{
    use WithPagination, WithoutUrlPagination, LoadsContentFilterData;
    public string $search = '';
    public Collection $genres;
    public array $genre = [];
    public array $classifications;
    public array $classification = [];
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
    public bool $modalMovie = false;

    #[Title('Filmes')]
    public function render()
    {
        return view('livewire.pages.movies.index', [
            'movies' => $this->moviesQuery()
        ]);
    }

    public function mount()
    {
        $this->loadFiltersFor(ContentType::MOVIE_SERIE);
    }

    public function moviesQuery($assortment = NULL)
    {
        if (!isNullOrEmpty($assortment))
            $this->sortBy = orderSortBy($this->sortBy, $assortment);

        return Movie::query()->select('movies.*')
            ->with('genres')
            ->withAvg('ratings', 'rating')
            ->when($this->search, function ($query) {
                $query->whereLike('title', "%$this->search%");
            })
            ->when($this->genre, function ($query) {
                $query->whereHas('genres', function ($query) {
                    $query->whereIn('genres.id', $this->genre);
                });
            })
            ->when($this->classification, function ($query) {
                $query->whereIn('classification_id', $this->classification);
            })
            ->orderBy(...array_values($this->sortBy))
            ->paginate($this->page);
    }

    public function resetFilter()
    {
        $this->reset('genre', 'classification', 'search');
        $this->resetPage();
    }
}
