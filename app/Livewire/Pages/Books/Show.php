<?php

namespace App\Livewire\Pages\Books;

use App\Models\User;
use Livewire\Component;
use App\Enums\StatusEnum;
use App\Models\Book\Book;
use App\Helpers\EnumHelper;
use App\Enums\ContentTypeEnum;
use App\Services\RatingService;
use App\Services\LibraryService;
use Illuminate\Support\Facades\Auth;

class Show extends Component
{
    public Book $book;
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
            'label' => 'Livros',
            'link' => '/books',
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
        return view('livewire.pages.books.show', [
            'statuses' => EnumHelper::arraySimple(StatusEnum::class, 'description')
        ])->title($this->book->title);
    }

    public function boot(LibraryService $libraryService, RatingService $ratingService)
    {
        $this->libraryService = $libraryService;
        $this->ratingService = $ratingService;
    }

    public function mount()
    {
        $this->breadcrumbs[1] = whichLibrary(url()->previousPath(), $this->breadcrumbs[1]);
        $this->breadcrumbs[2]['label'] = $this->book->title;
        $this->user = Auth::user();

        if ($this->user)
            $this->userLibraryEntry = $this->libraryService->getUserContent(
                $this->book,
                $this->user,
                ContentTypeEnum::BOOK
            );

        $this->ratings = $this->ratingService->getContentRating($this->book, $this->user);
    }

    public function handleLibrary(bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->userLibraryEntry['library'] = $library;
            $this->userLibraryEntry['status'] = optional(StatusEnum::tryFrom($status))->getDescription() ?? "";
            $this->libraryService->handleLibraryContent($this->book, $this->user, $library, $status);
        }
    }

    public function updatedUserLibraryEntryFavorite()
    {
        if (isLogged($this))
            $this->libraryService->toggleFavoriteStatus($this->book, $this->user, $this->userLibraryEntry['favorite']);
    }

    public function updatedRatingsValue()
    {
        if (isLogged($this))
            $this->ratings['avg'] = $this->ratingService->contentRating($this->book, $this->user, $this->ratings['value'], ContentTypeEnum::BOOK);
    }
}
