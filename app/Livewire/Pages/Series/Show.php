<?php

namespace App\Livewire\Pages\Series;

use App\Models\User;
use App\Enums\Status;
use Livewire\Component;
use App\Enums\ContentType;
use App\Models\Serie\Serie;
use App\Services\RatingService;
use App\Services\LibraryService;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public Serie $serie;
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
            'label' => 'Séries',
            'link' => '/series',
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
        return view('livewire.pages.series.show', [
            'statuses' => Status::array()
        ])->title($this->serie->title);
    }

    public function boot(LibraryService $libraryService, RatingService $ratingService)
    {
        $this->libraryService = $libraryService;
        $this->ratingService = $ratingService;
    }

    public function mount()
    {
        $this->breadcrumbs[1] = whichLibrary(url()->previousPath(), $this->breadcrumbs[1]);
        $this->breadcrumbs[2]['label'] = $this->serie->title;
        $this->user = Auth::user();

        if ($this->user)
            $this->userLibraryEntry = $this->libraryService->getUserContent(
                $this->serie,
                $this->user,
                ContentType::SERIE
            );

        $this->ratings = $this->ratingService->getContentRating($this->serie, $this->user);
    }

    public function handleLibrary(bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->userLibraryEntry['library'] = $library;
            $this->userLibraryEntry['status'] = optional(Status::tryFrom($status))->getDescription() ?? "";
            $this->libraryService->handleLibraryContent($this->serie, $this->user, $library, $status);
        }
    }

    public function updatedUserLibraryEntryFavorite()
    {
        if (isLogged($this))
            $this->libraryService->toggleFavoriteStatus($this->serie, $this->user, $this->userLibraryEntry['favorite']);
    }

    public function updatedRatingsValue()
    {
        if (isLogged($this))
            $this->ratings['avg'] = $this->ratingService->contentRating($this->serie, $this->user, $this->ratings['value'], ContentType::SERIE);
    }
}
