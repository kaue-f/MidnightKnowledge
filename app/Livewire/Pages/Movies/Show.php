<?php

namespace App\Livewire\Pages\Movies;

use App\Models\User;
use App\Enums\Status;
use Livewire\Component;
use App\Enums\ContentType;
use App\Models\Movie\Movie;
use App\Services\RatingService;
use App\Services\LibraryService;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public Movie $movie;
    public array $ratings = [];
    public array $userLibraryEntry = [
        'favorite' => false,
        'library' => false,
        'status' => ''
    ];
    public ?User $user;
    public array $breadcrumbs = [
        [
            'link' => '/',
            'icon' => 'c-home',
        ],
        [
            'label' => 'Filmes',
            'link' => '/movies',
            'icon' => 'lucide.layers',
        ],
        [
            'label' => '',
            'icon' => 'lucide.book',
        ],
    ];
    protected readonly LibraryService $libraryService;
    protected readonly RatingService $ratingService;

    public function render()
    {
        return view('livewire.pages.movies.show', [
            'statuses' => Status::array()
        ])->title($this->movie->title);
    }

    public function boot(LibraryService $libraryService, RatingService $ratingService)
    {
        $this->libraryService = $libraryService;
        $this->ratingService = $ratingService;
    }

    public function mount()
    {
        $this->breadcrumbs[1] = whichLibrary(url()->previousPath(), $this->breadcrumbs[1]);
        $this->breadcrumbs[2]['label'] = $this->movie->title;
        $this->user = Auth::user();

        if ($this->user)
            $this->userLibraryEntry = $this->libraryService->getUserContent(
                $this->movie,
                $this->user,
                ContentType::MOVIE
            );

        $this->ratings = $this->ratingService->getContentRating($this->movie, $this->user);
    }

    public function handleLibrary(bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->userLibraryEntry['library'] = $library;
            $this->userLibraryEntry['status'] = optional(Status::tryFrom($status))->getDescription() ?? "";
            $this->libraryService->handleLibraryContent($this->movie, $this->user, $library, $status);
        }
    }

    public function updatedUserLibraryEntryFavorite()
    {
        if (isLogged($this))
            $this->libraryService->toggleFavoriteStatus($this->movie, $this->user, $this->userLibraryEntry['favorite']);
    }

    public function updatedRatingsValue()
    {
        if (isLogged($this))
            $this->ratings['avg'] = $this->ratingService->contentRating($this->movie, $this->user, $this->ratings['value'], ContentType::MOVIE);
    }
}
