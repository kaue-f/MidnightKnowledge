<?php

namespace App\Livewire\Pages\Games;

use App\Models\User;
use App\Enums\Status;
use Livewire\Component;
use App\Models\Game\Game;
use App\Enums\ContentType;
use App\Services\RatingService;
use App\Services\LibraryService;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public Game $game;
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
        return view('livewire.pages.games.show', [
            'statuses' => Status::array()
        ])->title($this->game->title);
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
                $this->game,
                $this->user,
                ContentType::GAME
            );

        $this->ratings = $this->ratingService->getContentRating($this->game, $this->user);
    }

    public function handleLibrary(bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->userLibraryEntry['library'] = $library;
            $this->userLibraryEntry['status'] = optional(Status::tryFrom($status))->getDescription() ?? "";
            $this->libraryService->handleLibraryContent($this->game, $this->user, $library, $status);
        }
    }

    public function updatedUserLibraryEntryFavorite()
    {
        if (isLogged($this))
            $this->libraryService->toggleFavoriteStatus($this->game, $this->user, $this->userLibraryEntry['favorite']);
    }

    public function updatedRatingsValue()
    {
        if (isLogged($this))
            $this->ratings['avg'] = $this->ratingService->contentRating($this->game, $this->user, $this->ratings['value'], ContentType::GAME);
    }
}
