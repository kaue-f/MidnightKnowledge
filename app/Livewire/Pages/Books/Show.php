<?php

namespace App\Livewire\Pages\Books;

use App\Models\User;
use App\Enums\Status;
use Livewire\Component;
use App\Models\Book\Book;
use App\Enums\ContentType;
use App\Actions\Library\RateAction;
use Illuminate\Support\Facades\Auth;
use App\Actions\Library\LibraryAction;
use App\Actions\Library\FavoriteAction;

class Show extends Component
{
    public Book $book;
    public array $ratings = ['avg' => 0, 'value' => 0];
    public bool $favorite = false;
    public bool $library = false;
    public string $status = '';
    public ?User $user;

    public function render()
    {
        return view('livewire.pages.books.show', [
            'statuses' => Status::array()
        ])->title($this->book->title);
    }

    public function mount()
    {
        $this->user = Auth::user();

        $userBook = $this->book->users()
            ->where('user_id', $this->user->id ?? "")
            ->first();

        if (!isNullOrEmpty($userBook)) {
            $this->favorite = $userBook->pivot->favorite;
            $this->library = $userBook->pivot->library;
            $this->status = $userBook->pivot->status;
        }

        $userRating = $this->book->ratings()
            ->where([
                ['book_id', $this->book->id],
                ['user_id', $this->user->id],
            ])->first();

        $this->ratings['avg'] = round($this->book->ratings()->avg('rating'), 2) ?? 0;

        $this->ratings['value'] = (isNullOrEmpty($userBook) || ! $this->user->id)
            ? (int) $this->book->ratings()->avg('rating') ?? 0
            : $userRating->rating;
    }

    public function handleLibrary(LibraryAction $libraryAction, bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->library = $library;
            $this->status = Status::getDescription($status);
            $libraryAction->execute($this->book, $this->user, $library, $status);
        }
    }

    public function updatedFavorite(FavoriteAction $favoriteAction)
    {
        if (isLogged($this))
            $favoriteAction->execute($this->book, $this->user, $this->favorite);
    }

    public function updatedRatingsValue(RateAction $rateAction)
    {
        if (isLogged($this)) {
            $rateAction->execute($this->book, $this->user, $this->ratings['value'], ContentType::BOOK);
            $this->ratings['avg'] = $this->book->ratings()->avg('rating');
        }
    }
}
