<?php

namespace App\Livewire\Pages;

use App\Models\User;
use Livewire\Component;
use App\Enums\ContentType;
use Livewire\WithPagination;
use Livewire\Attributes\Title;
use App\Services\LibraryService;
use Illuminate\Support\Collection;
use Livewire\WithoutUrlPagination;
use Illuminate\Support\Facades\Auth;
use App\Traits\LoadsContentFilterData;

class Library extends Component
{
    use WithPagination, WithoutUrlPagination, LoadsContentFilterData;
    public User $user;
    public Collection $genres;
    public array $classifications;
    public array $statuses;
    public array $animeTypes;
    public array $platforms;
    public array $authors;
    public array $publishedBy;
    public array $formats;
    public array $series;
    public array $developers = [];
    public string $search = '';
    public ?bool $favorite = null;
    public $types = [];
    public array $filters = [
        'genre' => [],
        'classification' => [],
        'status' => [],
        'anime' => [
            'animeType' => []
        ],
        'book' => [
            'author' => [],
            'published' => [],
            'format' => [],
            'serie' => [],
        ],
        'game' => [
            'plataform' => [],
            'developer' => []
        ],
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
    public int $page = 15;
    public string $selectedTab = 'all-tab';
    protected readonly LibraryService $libraryService;

    #[Title('Minha Biblioteca')]
    public function render()
    {
        return view('livewire.pages.library', [
            'contentTypes' => ContentType::array(),
            'contents' => $this->loadUserLibrary(),
        ]);
    }

    public function boot(LibraryService $libraryService)
    {
        $this->libraryService = $libraryService;
    }

    public function mount()
    {
        $this->user = Auth::user();
        $this->loadAllFilters();
    }

    public function loadUserLibrary($assortment = NULL)
    {
        if ($assortment)
            $this->sortBy = orderSortBy($this->sortBy, $assortment);

        return $this->libraryService->getUserLibraryContent(
            $this->user,
            $this->types,
            $this->search,
            $this->favorite,
            $this->filters,
            $this->sortBy,
            $this->page,
        );
    }

    public function resetFilter()
    {
        $this->reset('search', 'filters', 'types', 'favorite');
        $this->loadAllTypes();
        $this->resetPage();
    }
}
