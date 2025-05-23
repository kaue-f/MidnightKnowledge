<?php

namespace App\Livewire\Pages\Animes;

use App\Models\User;
use App\Enums\Status;
use Livewire\Component;
use App\Enums\ContentType;
use App\Models\Anime\Anime;
use App\Actions\Library\RateAction;
use Illuminate\Support\Facades\Auth;
use App\Actions\Library\LibraryAction;
use App\Actions\Library\FavoriteAction;

class Show extends Component
{
    public Anime $anime;
    public array $ratings = ['avg' => 0, 'value' => 0];
    public bool $favorite = false;
    public bool $library = false;
    public string $status = '';
    public ?User $user;

    public function render()
    {
        return view('livewire.pages.animes.show', [
            'statuses' => Status::array()
        ])->title($this->anime->title);
    }

    public function mount()
    {
        $this->user = Auth::user();

        $animeUser = $this->anime->users()
            ->where('user_id', $this->user->id ?? "")
            ->first();

        if (!isNullOrEmpty($animeUser)) {
            $this->favorite = $animeUser->pivot->favorite;
            $this->library =  $animeUser->pivot->library;
            $this->status = $animeUser->pivot->status;
        }

        $userRating = $this->anime->ratings()
            ->where([
                ['anime_id', $this->anime->id],
                ['user_id', $this->user->id ?? ""],
            ])->first();

        $this->ratings['avg'] = round($this->anime->ratings()->avg('rating'), 2) ?? 0;

        $this->ratings['value'] = (isNullOrEmpty($userRating) || !$this->user->id)
            ? (int) $this->anime->ratings()->avg('rating') ?? 0
            : $userRating->rating;
    }

    public function handleLibrary(LibraryAction $libraryAction, bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->library = $library;
            $this->status = Status::getDescription($status);
            $libraryAction->execute($this->anime, $this->user, $library, $status);
        }
    }

    public function updatedFavorite(FavoriteAction $favoriteAction)
    {
        if (isLogged($this))
            $favoriteAction->execute($this->anime, $this->user, $this->favorite);
    }

    public function updatedRatingsValue(RateAction $rateAction)
    {
        if (isLogged($this)) {
            $rateAction->execute($this->anime, $this->user, $this->ratings['value'], ContentType::ANIME);
            $this->ratings['avg'] = $this->anime->ratings()->avg('rating');
        }
    }
}
