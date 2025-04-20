<?php

namespace App\Livewire\Pages;

use App\Enums\Status;
use Livewire\Component;
use App\Models\Movie\Movie;
use App\Services\LibraryService;
use Illuminate\Support\Facades\Auth;

class MovieView extends Component
{
    public Movie $movie;
    public array $ratings = ['avg' => 0, 'value' => 0];
    public bool $favorite = false;
    public bool $library = false;
    public string $status = '';
    private readonly LibraryService $libraryService;
    public function render()
    {
        return view('livewire.pages.movie-view', [
            'statuses' => Status::array()
        ])
            ->title($this->movie->title);
    }

    public function boot(LibraryService $libraryService)
    {
        $this->libraryService = $libraryService;
    }

    public function mount()
    {
        $movieUser = $this->movie->users()
            ->where('user_id', Auth::id())
            ->first();

        if (!isNullOrEmpty($movieUser)) {
            $this->favorite = $movieUser->pivot->favorite;
            $this->library =  $movieUser->pivot->library;
            $this->status = $movieUser->pivot->status;
        }

        $userRating = $this->movie->ratings()
            ->where([
                ['movie_id', $this->movie->id],
                ['user_id', Auth::id()],
            ])->first();

        $this->ratings['avg'] = round($this->movie->ratings()->avg('rating'), 2) ?? 0;

        $this->ratings['value'] = (isNullOrEmpty($userRating) || !Auth::id())
            ? (int) $this->movie->ratings()->avg('rating') ?? 0
            : $userRating->rating;
    }

    public function handleLibrary(bool $library, string $status = "")
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->library = $library;

        $this->status = Status::getDescription($status);

        $this->libraryService->library($this->movie, $library, $status);
    }

    public function updatedFavorite()
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->libraryService->favorite($this->movie, $this->favorite);
    }

    public function updatedRatingsValue()
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->libraryService->rate($this->movie, $this->ratings['value'], 'movie');

        $this->ratings['avg'] = $this->movie->ratings()->avg('rating');
    }
}
