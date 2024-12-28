<?php

namespace App\Livewire\Pages;

use App\Enums\Status;
use App\Models\Classification;
use App\Models\Game\Game;
use App\Services\ContentLibraryService;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class GameDetails extends Component
{
    public Game $game;
    public array $ratings = ['avg' => 0, 'value' => 0];
    public bool $favorite = false;
    public bool $library = false;
    public string $status;
    private readonly ContentLibraryService $contentLibraryService;
    public function render()
    {
        return view('livewire.pages.game-details', [
            'statuses' => Status::array(),
            'classification' => Classification::find($this->game->classification_id)
        ])
            ->title($this->game->title);
    }

    public function boot()
    {
        $this->contentLibraryService = app(ContentLibraryService::class);
    }

    public function mount()
    {
        $this->ratings['avg'] = $this->game->ratings()->avg('rating') ?? 0;

        $userRating = $this->game->ratings()
            ->where([
                ['game_id', $this->game->id],
                ['user_id', Auth::id()],
            ])->first();

        $this->ratings['value'] = (isNullOrEmpty($userRating) || !Auth::id())
            ? (int) $this->game->ratings()->avg('rating') ?? 0
            : $userRating->rating;

        $gameUser = $this->game->users()
            ->where('user_id', Auth::id())
            ->first();

        $this->favorite = $gameUser->pivot->favorite ?? false;
        $this->library =  $gameUser->pivot->library ?? false;
        $this->status = Status::set($gameUser->pivot->status ?? "");
    }

    public function handleLibrary(bool $library, string $status = "")
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->contentLibraryService->library($this->game, $library, $status);
        $this->library = $library;
        $this->status = Status::set($status);
    }

    public function updatedFavorite()
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->contentLibraryService->favorite($this->game, $this->favorite);
    }

    public function updatedRatingsValue()
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->contentLibraryService->rate($this->game, $this->ratings['value']);
        $this->ratings['avg'] = $this->game->ratings()->avg('rating');
    }
}
