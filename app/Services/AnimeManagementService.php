<?php

namespace App\Services;

use App\Models\User;
use App\Enums\ContentType;
use App\Models\Anime\Anime;
use App\Actions\SaveCoverAction;
use App\Livewire\Forms\AnimeForm;
use App\Actions\AttachGenresAction;

class AnimeManagementService
{
    public function create(AnimeForm $animeForm, User $user)
    {
        $anime = Anime::create([
            'title' => $animeForm->title,
            'synopsis' => $animeForm->synopsis,
            'classification_id' => $animeForm->classification,
            'episodes' => $animeForm->episodes,
            'season' => $animeForm->season,
            'season_count' => $animeForm->season_count,
            'ova_special_count' => $animeForm->ova_special_count,
            'movie_count' => $animeForm->movie_count,
            'anime_type_id' => $animeForm->type,
            'release_date' => $animeForm->release_date,
            'user_id' => $user->id,
        ]);

        app(AttachGenresAction::class)->execute($anime, $animeForm->genres);
        app(SaveCoverAction::class)->execute($anime, $animeForm->image,  ContentType::ANIME->value);

        if (!isNullOrEmpty($anime)) {
            $animeForm->resetForm();
            return notyf()->success("O anime $anime->title foi adicionado ao acervo Midnight Knowledge.");
        }

        return notyf()->warning("Não foi possível cadastrar o anime desejado. Verifique os dados e tente novamente.");
    }
}
