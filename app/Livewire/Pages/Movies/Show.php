<?php

namespace App\Livewire\Pages\Movies;

use App\Models\User;
use App\Enums\Status;
use Livewire\Component;
use App\Enums\ContentType;
use App\Models\Movie\Movie;
use App\Actions\Library\RateAction;
use Illuminate\Support\Facades\Auth;
use App\Actions\Library\LibraryAction;
use App\Actions\Library\FavoriteAction;

class Show extends Component
{
    public Movie $movie;
    public array $ratings = ['avg' => 0, 'value' => 0];
    public bool $favorite = false;
    public bool $library = false;
    public string $status = '';
    public ?User $user;

    public function render()
    {
        return view('livewire.pages.movies.show', [
            'statuses' => Status::array()
        ])->title($this->movie->title);
    }

    public function mount()
    {
        $this->user = Auth::user();

        $movieUser = $this->movie->users()
            ->where('user_id', $this->user->id ?? "")
            ->first();

        if (!isNullOrEmpty($movieUser)) {
            $this->favorite = $movieUser->pivot->favorite;
            $this->library =  $movieUser->pivot->library;
            $this->status = $movieUser->pivot->status;
        }

        $userRating = $this->movie->ratings()
            ->where([
                ['movie_id', $this->movie->id],
                ['user_id', $this->user->id ?? ""],
            ])->first();

        $this->ratings['avg'] = round($this->movie->ratings()->avg('rating'), 2) ?? 0;

        $this->ratings['value'] = (isNullOrEmpty($userRating) || !$this->user->id)
            ? (int) $this->movie->ratings()->avg('rating') ?? 0
            : $userRating->rating;
    }

    public function handleLibrary(LibraryAction $libraryAction, bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->library = $library;
            $this->status = Status::getDescription($status);
            $libraryAction->execute($this->movie, $this->user, $library, $status);
        }
    }

    public function updatedFavorite(FavoriteAction $favoriteAction)
    {
        if (isLogged($this))
            $favoriteAction->execute($this->movie, $this->user, $this->favorite);
    }

    public function updatedRatingsValue(RateAction $rateAction)
    {
        if (isLogged($this)) {
            $rateAction->execute($this->movie, $this->user, $this->ratings['value'], ContentType::MOVIE);
            $this->ratings['avg'] = $this->movie->ratings()->avg('rating');
        }
    }
}
