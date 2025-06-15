<?php

namespace App\Livewire\Pages\Animes;

use App\Models\User;
use App\Enums\Status;
use Livewire\Component;
use App\Enums\ContentType;
use App\Models\Anime\Anime;
use App\Services\RatingService;
use App\Services\LibraryService;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public Anime $anime;
    public array $ratings = [];
    public array $userLibraryEntry = [
        'favorite' => false,
        'library' => false,
        'status' => ''
    ];
    public ?User $user;
    protected readonly LibraryService $libraryService;
    protected readonly RatingService $ratingService;

    public function render()
    {
        return view('livewire.pages.animes.show', [
            'statuses' => Status::array()
        ])->title($this->anime->title);
    }

    public function boot(LibraryService $libraryService, RatingService $ratingService)
    {
        $this->libraryService = $libraryService;
        $this->ratingService = $ratingService;
    }

    public function mount()
    {
        $this->user = Auth::user();

        if ($this->user)
            $this->userLibraryEntry = $this->libraryService->getUserContent(
                $this->anime,
                $this->user,
                ContentType::ANIME
            );

        $this->ratings = $this->ratingService->getContentRating($this->anime, $this->user);
    }

    public function handleLibrary(bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->userLibraryEntry['library'] = $library;
            $this->userLibraryEntry['status'] = optional(Status::tryFrom($status))->getDescription() ?? "";
            $this->libraryService->handleLibraryContent($this->anime, $this->user, $library, $status);
        }
    }

    public function updatedUserLibraryEntryFavorite()
    {
        if (isLogged($this))
            $this->libraryService->toggleFavoriteStatus($this->anime, $this->user, $this->userLibraryEntry['favorite']);
    }

    public function updatedRatingsValue()
    {
        if (isLogged($this))
            $this->ratings['avg'] = $this->ratingService->contentRating($this->anime, $this->user, $this->ratings['value'], ContentType::ANIME);
    }
}
