<?php

namespace App\Livewire\Pages;

use App\Enums\Status;
use Livewire\Component;
use App\Models\Game\Game;
use App\Models\Classification;
use Illuminate\Support\Facades\Auth;
use App\Services\ContentLibraryService;

class GameView extends Component
{
    public Game $game;
    public array $ratings = ['avg' => 0, 'value' => 0];
    public bool $favorite = false;
    public bool $library = false;
    public string $status = '';
    private readonly ContentLibraryService $contentLibraryService;

    public function render()
    {
        return view('livewire.pages.game-view', [
            'statuses' => Status::array(),
            'classification' => Classification::find($this->game->classification_id)
        ])
            ->title($this->game->title);
    }

    public function boot(ContentLibraryService $contentLibraryService)
    {
        $this->contentLibraryService = $contentLibraryService;
    }

    public function mount()
    {
        $gameUser = $this->game->users()
            ->where('user_id', Auth::id())
            ->first();

        if (!isNullOrEmpty($gameUser)) {
            $this->favorite = $gameUser->pivot->favorite;
            $this->library =  $gameUser->pivot->library;
            $this->status = $gameUser->pivot->status;
        }

        $userRating = $this->game->ratings()
            ->where([
                ['game_id', $this->game->id],
                ['user_id', Auth::id()],
            ])->first();

        $this->ratings['avg'] = round($this->game->ratings()->avg('rating'), 2) ?? 0;

        $this->ratings['value'] = (isNullOrEmpty($userRating) || !Auth::id())
            ? (int) $this->game->ratings()->avg('rating') ?? 0
            : $userRating->rating;
    }

    public function handleLibrary(bool $library, string $status = "")
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->library = $library;

        $this->status = Status::getDescription($status);

        $this->contentLibraryService->library($this->game, $library, $status);
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
