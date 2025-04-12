<?php

namespace App\Livewire\Pages;

use App\Enums\Status;
use Livewire\Component;
use App\Models\Anime\Anime;
use App\Models\Classification;
use App\Models\Anime\AnimeType;
use Illuminate\Support\Facades\Auth;
use App\Services\ContentLibraryService;

class AnimeView extends Component
{
    public Anime $anime;
    public array $ratings = ['avg' => 0, 'value' => 0];
    public bool $favorite = false;
    public bool $library = false;
    public string $status = '';
    private readonly ContentLibraryService $contentLibraryService;

    public function render()
    {
        return view('livewire.pages.anime-view', [
            'statuses' => Status::array(),
            'classification' => Classification::find($this->anime->classification_id),
            'type' => AnimeType::find($this->anime->anime_type_id)
        ])->title($this->anime->title);
    }

    public function boot(ContentLibraryService $contentLibraryService)
    {
        $this->contentLibraryService = $contentLibraryService;
    }

    public function mount()
    {
        $animeUser = $this->anime->users()
            ->where('user_id', Auth::id())
            ->first();

        if (!isNullOrEmpty($animeUser)) {
            $this->favorite = $animeUser->pivot->favorite;
            $this->library =  $animeUser->pivot->library;
            $this->status = $animeUser->pivot->status;
        }

        $userRating = $this->anime->ratings()
            ->where([
                ['anime_id', $this->anime->id],
                ['user_id', Auth::id()],
            ])->first();

        $this->ratings['avg'] = round($this->anime->ratings()->avg('rating'), 2) ?? 0;

        $this->ratings['value'] = (isNullOrEmpty($userRating) || !Auth::id())
            ? (int) $this->anime->ratings()->avg('rating') ?? 0
            : $userRating->rating;
    }

    public function handleLibrary(bool $library, string $status = "")
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->library = $library;

        $this->status = Status::getDescription($status);

        $this->contentLibraryService->library($this->anime, $library, $status);
    }

    public function updatedFavorite()
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->contentLibraryService->favorite($this->anime, $this->favorite);
    }

    public function updatedRatingsValue()
    {
        if (!Auth::check())
            return $this->dispatch('noLogged');

        $this->contentLibraryService->rate($this->anime, $this->ratings['value'], 'anime');

        $this->ratings['avg'] = $this->anime->ratings()->avg('rating');
    }
}
