<?php

namespace App\Livewire\Pages;

use Livewire\Component;
use App\Models\Anime\Anime;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use Illuminate\Support\Collection;
use Livewire\WithoutUrlPagination;
use App\Services\Caches\AnimeCache;
use App\Services\Caches\ClassificationCache;

class Animes extends Component
{
    use WithPagination, WithoutUrlPagination;
    public string $search = '';
    public Collection $genres;
    public array $genre = [];
    public array $animeTypes;
    public array $animeType = [];
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
    public int $page = 15;
    public bool $modalAnime = false;

    #[Title('Animes')]
    public function render()
    {
        return view('livewire.pages.animes', ['animes' => $this->animesQuery()]);
    }

    public function mount(AnimeCache $animeCache)
    {
        $this->genres = $animeCache->getGenres();
        $this->animeTypes = $animeCache->getTypes();
        $this->classifications = app(ClassificationCache::class)->fetch();
    }

    public function animesQuery($assortment = NULL)
    {
        if (!isNullOrEmpty($assortment))
            $this->sortBy = orderSortBy($this->sortBy, $assortment);

        return Anime::query()->select('animes.*')
            ->with(['genres',])
            ->withAvg('ratings', 'rating')
            ->when($this->search, function ($query) {
                $query->whereLike('title', "%$this->search%");
            })
            ->when($this->genre, function ($query) {
                $query->whereHas('genres', function ($query) {
                    $query->whereIn('genres.id', $this->genre);
                });
            })
            ->when($this->animeType, function ($query) {
                $query->whereIn('anime_type_id', $this->animeType);
            })
            ->when($this->classification, function ($query) {
                $query->whereIn('classification_id', $this->classification);
            })
            ->orderBy(...array_values($this->sortBy))
            ->paginate($this->page);
    }

    public function resetFilter()
    {
        $this->reset('genre', 'animeType', 'classification');
        $this->resetPage();
    }
}
