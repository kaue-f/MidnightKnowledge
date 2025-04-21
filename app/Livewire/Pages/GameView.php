<?php

namespace App\Livewire\Pages;

use App\Models\User;
use App\Enums\Status;
use Livewire\Component;
use App\Models\Game\Game;
use App\Enums\ContentType;
use App\Actions\Library\RateAction;
use Illuminate\Support\Facades\Auth;
use App\Actions\Library\LibraryAction;
use App\Actions\Library\FavoriteAction;

class GameView extends Component
{
    public Game $game;
    public array $ratings = ['avg' => 0, 'value' => 0];
    public bool $favorite = false;
    public bool $library = false;
    public string $status = '';
    public ?User $user;

    public function render()
    {
        return view('livewire.pages.game-view', [
            'statuses' => Status::array()
        ])->title($this->game->title);
    }

    public function mount()
    {
        $this->user = Auth::user();

        $gameUser = $this->game->users()
            ->where('user_id', $this->user->id ?? "")
            ->first();

        if (!isNullOrEmpty($gameUser)) {
            $this->favorite = $gameUser->pivot->favorite;
            $this->library =  $gameUser->pivot->library;
            $this->status = $gameUser->pivot->status;
        }

        $userRating = $this->game->ratings()
            ->where([
                ['game_id', $this->game->id],
                ['user_id', $this->user->id ?? ""],
            ])->first();

        $this->ratings['avg'] = round($this->game->ratings()->avg('rating'), 2) ?? 0;

        $this->ratings['value'] = (isNullOrEmpty($userRating) || !$this->user->id)
            ? (int) $this->game->ratings()->avg('rating') ?? 0
            : $userRating->rating;
    }

    public function handleLibrary(LibraryAction $libraryAction, bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->library = $library;
            $this->status = Status::getDescription($status);
            $libraryAction->execute($this->game, $this->user, $library, $status);
        }
    }

    public function updatedFavorite(FavoriteAction $favoriteAction)
    {
        if (isLogged($this))
            $favoriteAction->execute($this->game, $this->user, $this->favorite);
    }

    public function updatedRatingsValue(RateAction $rateAction)
    {
        if (isLogged($this)) {
            $rateAction->execute($this->game, $this->user, $this->ratings['value'], ContentType::GAME);
            $this->ratings['avg'] = $this->game->ratings()->avg('rating');
        }
    }
}
