<?php

namespace App\Livewire\Pages;

use App\Models\User;
use App\Enums\Status;
use Livewire\Component;
use App\Enums\ContentType;
use App\Models\Serie\Serie;
use App\Actions\Library\RateAction;
use Illuminate\Support\Facades\Auth;
use App\Actions\Library\LibraryAction;
use App\Actions\Library\FavoriteAction;

class SerieView extends Component
{
    public Serie $serie;
    public array $ratings = ['avg' => 0, 'value' => 0];
    public bool $favorite = false;
    public bool $library = false;
    public string $status = '';
    public ?User $user;

    public function render()
    {
        return view('livewire.pages.serie-view', [
            'statuses' => Status::array()
        ])->title($this->serie->title);
    }

    public function mount()
    {
        $this->user = Auth::user();

        $serieUser = $this->serie->users()
            ->where('user_id', $this->user->id ?? "")
            ->first();

        if (!isNullOrEmpty($serieUser)) {
            $this->favorite = $serieUser->pivot->favorite;
            $this->library = $serieUser->pivot->library;
            $this->status = $serieUser->pivot->status;
        }

        $userRating = $this->serie->ratings()
            ->where([
                ['serie_id', $this->serie->id],
                ['user_id', $this->user->id ?? ""]
            ])->first();

        $this->ratings['avg'] = round($this->serie->ratings()->avg('rating'), 2);

        $this->ratings['value'] = (isNullOrEmpty($userRating) || !$this->user->id)
            ? (int) $this->serie->ratings()->avg('rating') ?? 0
            : $userRating->rating;
    }

    public function handleLibrary(LibraryAction $libraryAction, bool $library, string $status = "")
    {
        if (isLogged($this)) {
            $this->library = $library;
            $this->status = Status::getDescription($status);
            $libraryAction->execute($this->serie, $this->user, $library, $status);
        }
    }

    public function updatedFavorite(FavoriteAction $favoriteAction)
    {
        if (isLogged($this))
            $favoriteAction->execute($this->serie, $this->user, $this->favorite);
    }

    public function updatedRatingsValue(RateAction $rateAction)
    {
        if (isLogged($this)) {
            $rateAction->execute($this->serie, $this->user, $this->ratings['value'], ContentType::SERIE);
            $this->ratings['avg'] = $this->serie->ratings()->avg('rating');
        }
    }
}
